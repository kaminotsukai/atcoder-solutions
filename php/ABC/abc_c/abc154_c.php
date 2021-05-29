<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$array = [];
for ($i = 0; $i < $N; $i ++) $array[$Ai[$i]] = 1;

echo count($array) === count($Ai) ? 'YES' : 'NO';
echo PHP_EOL;