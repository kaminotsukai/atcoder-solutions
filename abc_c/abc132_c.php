<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Di = $ints();

sort($Di);
$x = $N / 2;
echo $Di[$x] - $Di[$x - 1] . PHP_EOL;