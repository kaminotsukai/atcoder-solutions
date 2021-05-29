<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$H, $W] = $ints();

$min = INF;
$sum = 0;
for ($i = 0; $i < $H; $i ++) {
    $column = $ints();

    // 最小の値を取得
    $columnMin = min($column);
    $min = min($min, $columnMin);

    // 総和
    $sum += array_sum($column);
}

echo $sum - $min * $W * $H . PHP_EOL;