<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Xi = $ints();

$minDist = INF;
for ($i = 1; $i <= 100; $i ++) {
    $total = 0;
    foreach ($Xi as $x) $total += ($x - $i) ** 2;
    $minDist = min($minDist, $total);
}
echo $minDist . PHP_EOL;