<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// 10**12乗なのでTLEになる
// 半分だけ確かめればいいので10**6で許容範囲内に収まる
[$n] = $ints();

$i = 1;
while ((int)($i . $i) <= $n) {
    $i++;
}

echo $i - 1 . PHP_EOL;