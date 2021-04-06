<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// 条件
// - コンマの数は[n >= 1000 => n - 999]
[$N] = $ints();

$ans = 0;
for ($i = 1; $i <= 5; $i ++) {
    if ($N < pow(1000, $i)) break;
    if ($N >= pow(1000, $i)) $ans += $N - (int) str_repeat('999', $i);
}

printn($ans);