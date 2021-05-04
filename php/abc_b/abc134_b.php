<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $D] = $ints();
$rangePerOne = $D * 2 + 1;
echo ceil($N / $rangePerOne) . PHP_EOL;