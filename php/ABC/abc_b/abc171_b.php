<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();
$prices = $ints();
sort($prices);

$sum = 0;
for ($i = 0; $i < $K; $i ++) {
    $sum += $prices[$i];
}

echo $sum . PHP_EOL;
