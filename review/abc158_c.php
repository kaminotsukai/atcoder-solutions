<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$A, $B] = $ints();

$x = floor((100 * $A) / 8);
$y = floor($x * 0.1);
echo $B == $y ? $x : -1;
echo PHP_EOL;
