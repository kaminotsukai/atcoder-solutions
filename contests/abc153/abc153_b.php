<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$H, $N] = $ints();
$Ai = $ints();

for ($i = 0; $i < $N; $i ++) $H -= $Ai[$i];
echo $H <= 0 ? $printn('Yes') : $printn('No');