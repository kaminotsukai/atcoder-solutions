<?php declare(strict_types = 1);


/**
 * 問題
 * 長さnの数列のa1...anと整数Sが与えられる。連続する部分列で総和がS以上になる物の最小の長さを求めなさい
 * 存在しない場合は0を出力すること
 *
 * 解法：しゃくとり法
 */

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

[$n] = $ints();
[$S] = $ints();
$a = $ints();

// 前処理で総和の配列を出す N(O)
$sum = [0];
for ($i = 0; $i < $N; $i++) {
    $sum[] = $sum[$i] + $a[$i];
}

// 存在しない場合は0を出力
if ($sum[$N] < $S) {
    echo 0 . PHP_EOL;
    exit;
}

