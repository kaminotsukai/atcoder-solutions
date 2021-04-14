<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * - 10**12なので全探索は不可能
 * - 構造がバイナリツリーなので10**6まで計算量落とせそう
 * - 左の総数がいくらになるのか求めれれば解けそう => 予想あってた！
 */

// xを倒すのに必要な攻撃回数
// recursiveの略
function rec($h)
{
    if ($h === 1) return 1;
    return rec(intdiv($h, 2)) * 2 + 1;
}

 [$H] = $ints();
 echo rec($H) . PHP_EOL;

