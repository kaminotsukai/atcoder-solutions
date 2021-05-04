<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b] = $ints();
$k = ($a + $b) / 2;
echo is_int($k) ? $k : 'IMPOSSIBLE';
echo PHP_EOL;