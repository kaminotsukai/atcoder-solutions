<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Xi = $ints();

$sumM = 0;
$sumY = 0;
$sumT = [];
for ($i = 0; $i < $N; $i ++) {
    $sumM += abs($Xi[$i]);
    $sumY += $Xi[$i] ** 2;
    $sumT[] = abs($Xi[$i]);
}

echo $sumM . PHP_EOL;
echo sqrt($sumY) . PHP_EOL;
echo max($sumT) . PHP_EOL;