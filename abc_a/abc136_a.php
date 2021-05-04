<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B, $C] = $ints();
if ($A < $B + $C) {
    echo $C - $A + $B . PHP_EOL;
} else {
    echo 0 . PHP_EOL;
}