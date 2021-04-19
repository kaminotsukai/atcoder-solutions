<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b] = $ints();
echo solve($a, $b) . PHP_EOL;

/**
 * - 全探索でGCDを計算すると間に合わない
 * - B - Aの差が答えになりうるので 1..(B-A)（以降diffと呼ぶ）までを確認する
 * - B >= diff * xのxを求めて、x - 1がA以上であればそれが最大の公約数になる
 */

function solve($a, $b): int
{
    $diff = $b - $a;
    for ($i = $diff; $i >= 1; $i --) {
        $multipleNum = intdiv($b, $i) - 1;
        if ($a <= $multipleNum * $i) return $i;
    }
    return -1;
}