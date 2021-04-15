<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K, $M] = $ints();
$Ai = $ints();

$reqPoint = $M * $N - array_sum($Ai);
$reqPoint = $reqPoint < 0 ? 0 : $reqPoint;
echo $reqPoint > $K ? -1 : $reqPoint;
echo PHP_EOL;