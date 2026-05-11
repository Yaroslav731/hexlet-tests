<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/ReverseString.php';
use function App\ReverseString\reverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function testReverseString(): void
    {
        $input = trim(file_get_contents(__DIR__ . "/fixtures/input.txt"));
        $expected = trim(file_get_contents(__DIR__ . "/fixtures/expected.txt"));
        $result = reverseString($input);
        $this->assertEquals($expected, $result);
    }
}
