<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Bi = $ints();

$ans = 0;
for ($i = 1; $i < $N - 1; $i ++) $ans += min($Bi[$i - 1], $Bi[$i]);
$ans += $Bi[0];
$ans += $Bi[$N - 2];

echo $ans . PHP_EOL;

