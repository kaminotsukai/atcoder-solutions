<?php

/**
 * 素数判定プログラム
 */

$num = trim(fgets(STDIN));

function isPrime(int $num): bool
{
    if ($num === 1) return false;
    // i < √nだけど、浮動小数点が出るため累乗で整数にして比較している
    for ($i = 2; $i * $i < $num; $i ++) {
        if ($num % $i === 0) return false;
    }
    return true;
}

echo isPrime($num) ? 'Yes' : 'No';