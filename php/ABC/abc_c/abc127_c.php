<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();

$left = 0;
$right = INF;
while ($M--) {
    [$L, $R] = $ints();

    // これがコーナーケースなのかな？
    // このケースが出た時点で、全ての扉を開けることはできない
    if ($left > $R || $right < $L) {
        echo 0 . PHP_EOL;
        exit;
    }

    $left = max($left, $L);
    $right = min($right, $R);
}
echo $right - $left + 1 . PHP_EOL;