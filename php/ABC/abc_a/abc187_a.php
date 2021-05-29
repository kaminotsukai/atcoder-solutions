<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B] = $strs();

$len = strlen($A);
$sumA = $sumB = 0;
for ($i = 0; $i < $len; $i ++) {
    $sumA += (int) $A[$i];
    $sumB += (int) $B[$i];
}

echo max($sumA, $sumB) . PHP_EOL;

// 文字列の総和を求める時はstr_split使うのいいかも？
// [$A, $B] = $strs();
// $sumA = array_sum(str_split($A));
// $sumB = array_sum(str_split($B));
// echo max($sumA, $sumB) . PHP_EOL;