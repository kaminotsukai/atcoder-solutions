<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

$div = intdiv($N, $K);
echo min($N - $K * $div, $K * ($div + 1) - $N) . PHP_EOL;