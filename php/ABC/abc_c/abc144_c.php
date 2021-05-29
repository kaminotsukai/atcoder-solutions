<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$s = sqrt($N);
$ans = INF;
for ($i = 1; $i <= $s; $i ++) {
    if ($N % $i === 0) {
        $distance = $i  + ($N / $i) - 2;
        $ans = min($distance, $ans);
    }
}
echo $ans . PHP_EOL;

