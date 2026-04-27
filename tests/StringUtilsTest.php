<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/StringUtils.php';

use Webmozart\Assert\Assert;

Assert::eq(StringUtils\capitalize(''), '');
Assert::eq(StringUtils\capitalize('hello'), 'Hello');

echo 'Все тесты пройдены!';
