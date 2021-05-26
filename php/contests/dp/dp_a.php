<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$hi = $ints();

$dp = [];
$dp[0] = 0;
$dp[1] = abs($hi[1] - $hi[0]);

for ($i = 2; $i < $N; $i++) {
    $dp[$i] = min($dp[$i - 1] + abs($hi[$i] - $hi[$i - 1]), $dp[$i - 2] + abs($hi[$i] - $hi[$i - 2]));
}

echo $dp[$N - 1] . PHP_EOL;