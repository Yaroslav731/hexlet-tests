<?php

declare(strict_types=1);

namespace App\ReverseString;

function reverseString(string $string): string
{
    return implode(array_reverse(mb_str_split($string)));
}
