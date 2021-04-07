<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$N, $K] = $ints();
$a = $ints();

// 累積和を前計算
$sumArray = [0];
for ($i = 0; $i < $N; $i ++) {
    $sumArray[] = $sumArray[$i] + $a[$i];
}

// 合計配列の差分を確認する
$sum = 0;
for ($j = 0; $j <= $N - $K; $j ++) {
    $sum += $sumArray[$K + $j] - $sumArray[$j];
}
echo $sum . PHP_EOL;