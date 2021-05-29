<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B] = $ints();

if ($A < 10 && $B < 10) {
    echo $A * $B . PHP_EOL;
} else {
    echo -1 . PHP_EOL;
}