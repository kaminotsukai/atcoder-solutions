<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();

$conditions = [];
for ($i = 0; $i < $M; $i ++) $conditions[] = $ints();

[$K] = $ints();

$a = $b = [];
for ($i = 0; $i < $K; $i ++) [$a[$i], $b[$i]] = $ints();


foreach ($a as $item1) {
    foreach ($b as $item2) {
        //
    }
}