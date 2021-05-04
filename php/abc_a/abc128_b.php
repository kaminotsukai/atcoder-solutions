<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$x, $k, $d] = $ints();

echo solve(abs($x), $k, $d) . PHP_EOL;

/**
 * exitが多い時は関数にした方がいいかも
 */
function solve($X, $K, $D)
{
    // 〇〇に必要な回数的なものはneedにする
    $need = intdiv($X, $D);
    if ($K < $need) return $X - $K * $D;

    // 現在の座標
    $X = $X - $D * $need;
    $K -= $need;
    return $K % 2 === 0 ? $X : abs($X - $D);
}