<?php declare(strict_types = 1);

use SebastianBergmann\CodeCoverage\Report\PHP;

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
echo ceil($N / 2) . PHP_EOL;