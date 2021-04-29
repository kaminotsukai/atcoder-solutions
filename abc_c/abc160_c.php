<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 全ての差を求めて最も差が大きいものを含めない総和
 */

[$K, $N] = $ints();
$Ai = $ints();

$distances = [];
$distances[] = $Ai[0] + $K - $Ai[$N - 1];
for ($i = 0; $i < $N - 1; $i ++) $distances[] = $Ai[$i + 1] - $Ai[$i];
echo $K - max($distances) . PHP_EOL;