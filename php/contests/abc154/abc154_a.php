<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$S, $T] = $strs();
[$A, $B] = $ints();
[$U] = $strs();

echo $U === $S
    ? $A - 1 . ' ' . $B
    : $A . ' ' . $B - 1;