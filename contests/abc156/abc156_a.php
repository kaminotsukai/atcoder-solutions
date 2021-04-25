<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $R] = $ints();

echo $N >= 10
    ? $R . PHP_EOL
    : $R + 100 * (10 - $N) . PHP_EOL;