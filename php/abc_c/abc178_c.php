<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$mod = 1000000007;

// 0と9を含む = 全体 - 0を含まない - 9を含まない + 0も9も含まない
$all = modpow(10, $N);
$notZeroOrNine = modpow(9, $N);
$notZeroAndNine = modpow(8, $N);

$ans = $all - 2 * $notZeroOrNine + $notZeroAndNine;
$ans = modint($ans);
echo modint($ans + $mod) . PHP_EOL;

function modpow(int $n, int $k)
{
    $result = 1;
    while ($k > 0) {
        $result = modint($result * $n);
        $k--;
    }
    return $result;
}

function modint(int $n)
{
    global $mod;
    return $n % $mod;
}