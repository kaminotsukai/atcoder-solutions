<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

// 1 / (1 / 10 + 1 / 30)

[$N] = $ints();
$Ai = $ints();

$sum = 0;
for ($i = 0; $i < $N; $i++) $sum += 1 / $Ai[$i];
echo 1 / $sum . PHP_EOL;