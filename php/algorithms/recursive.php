<?php

// N以下の正の整数の総和
function func(int $n)
{
    // ベースケース
    if ($n === 0) return 0;

    // 再帰呼び出し
    return $n + func($n - 1);
}

echo func(3);

// ===================================
// n = 3
// n + func(3 - 1)
// n + func(2 - 1)
// n + func(1 - 1)
// n = 0
// ===================================