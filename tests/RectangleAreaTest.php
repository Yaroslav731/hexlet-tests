<?php

declare(strict_types=1);

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../src/RectangleArea.php';
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use function App\RectangleArea\calculateRectangleArea;

class RectangleAreaTest extends TestCase
{
        #[DataProvider('rectangleAreaProvider')]
        public function testCalculateRectangleArea($length, $width, $expected) : void
        {
                $this->assertEquals($expected, calculateRectangleArea($length, $width));
        }
        public static function RectangleAreaProvider(): array
        {
                return [
                        [5, 7, 35],
                        [0, 5, null],
                        [-1, 10, null],
                ];
        }
}
