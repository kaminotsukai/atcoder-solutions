<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();
$pi = $ints();

// 累積和
$cusum = [0];
for ($i = 0; $i < $N; $i ++) $cusum[$i + 1] = $cusum[$i] + calcExpectedValue($pi[$i]);

$max = 0;
for ($i = $K; $i <= $N; $i ++) $max = max($max, $cusum[$i] - $cusum[$i - $K]);

echo $max . PHP_EOL;

function calcExpectedValue(int $num): float
{
    return ($num + 1) / 2;
}
