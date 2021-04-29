<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$X] =$ints();

echo $X === 7 || $X === 5 || $X === 3 ? 'YES' : 'NO';
echo PHP_EOL;