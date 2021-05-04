<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$K, $X] = $ints();
$start = $X - ($K - 1);
$end = $X + ($K - 1);

$results = [];
for ($i = $start; $i <= $end; $i ++) {
    $results[] = $i;
}

echo implode(' ', $results) . PHP_EOL;