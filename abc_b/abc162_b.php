<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$sum = 0;
for ($i = 1; $i <= $N; $i++) if ($i % 5 !== 0 && $i % 3 !== 0) $sum += $i;
echo $sum . PHP_EOL;