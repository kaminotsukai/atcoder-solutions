<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B, $C, $K] = $ints();

$sum = 0;
// A
$Xa = min($K, $A);
$K -= $Xa;
if ($K <= 0) {
    echo $Xa . PHP_EOL;
    exit;
}

// B
$Xb = min($K, $B);
$K -= $Xb;
if ($K <= 0) {
    echo $Xa . PHP_EOL;
    exit;
}

// B
$Xc = min($K, $C);
$K -= $Xc;
if ($K <= 0) {
    echo $Xa - $Xc . PHP_EOL;
    exit;
}

