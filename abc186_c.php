<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * https://atcoder.jp/contests/abc186/submissions/22123461
 */

[$N] = $ints();

$cnt = 0;
for ($i = 1; $i <= $N; $i ++) {
    $base = changeBaseNumber(8, $i);

    // 7という文字を含んでいるか？
    if (containNum($base, 7) || containNum($i, 7)) $cnt ++;
}

echo $N - $cnt . PHP_EOL;

function containNum($value, int $num)
{
    $str = str_replace($num, '', $value);
    return strlen($str) === strlen($value) ? false : true;
}

function changeBaseNumber(int $base, int $num)
{
    while ($num > $base - 1) {
        $result[] = $num % $base;
        $num = intdiv($num, $base);
    }
    $result[] = $num;

    return implode('', array_reverse($result));
}

