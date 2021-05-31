<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();
$Ai = $ints();
echo $N - array_sum($Ai) < 0 ? -1 : $N - array_sum($Ai);
echo PHP_EOL;