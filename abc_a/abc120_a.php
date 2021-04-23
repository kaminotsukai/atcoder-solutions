<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b, $c] = $ints();
echo intdiv($b, $a) <= $c ? intdiv($b, $a) : $c;
echo PHP_EOL;