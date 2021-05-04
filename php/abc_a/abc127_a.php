<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B] = $ints();

$price = 0;
if ($A >= 13) $price = $B;
else if ($A <= 12 && $A >= 6) $price = $B / 2;
echo $price . PHP_EOL;