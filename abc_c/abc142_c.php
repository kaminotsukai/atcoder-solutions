<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 順列
 */

[$N] = $ints();
$Ai = $ints();

$orders = [];
$ans = [];
foreach ($Ai as $key => $a) $orders[$a] = $key + 1;
for ($i = 1; $i <= $N; $i ++) $ans[] = $orders[$i];
echo implode(' ', $ans) . PHP_EOL;