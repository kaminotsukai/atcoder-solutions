<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 解説
 */
[$K] = $ints();
[$A, $B] = $ints();

$num = $K * ceil($A / $K);
echo $num >= $A && $num <= $B ? 'OK' : 'NG';
echo PHP_EOL;