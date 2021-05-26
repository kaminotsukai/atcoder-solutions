<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 掛け算すると時間がかかりすぎる
 * 倍数を探すと想定外の答えが出てくる
 */

[$K] = $ints();

// function isAllSeven(string $value): bool
// {
//     $len = strlen($value);
//     return $value === str_repeat('7', $len);
// }

// 2の倍数は存在しない
if ($K % 2 === 0) {
    echo -1 . PHP_EOL;
    exit;
}

// 全探索
$i = 1;
while (1) {
    $num = str_repeat('7', $i);
    if ($num % $K == 0) {
        echo strlen((string)$num) . PHP_EOL;
        exit;
    }
    $i++;
}