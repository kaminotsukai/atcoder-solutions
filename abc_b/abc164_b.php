<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B, $C, $D] = $ints();

$turn = 2;
while (1) {
    if ($turn % 2 === 0) $C -= $B;
    else $A -= $D;
    if ($A <= 0 || $C <= 0) break;
    $turn++;
}

echo $A <= 0 ? 'No' : 'Yes';
echo PHP_EOL;
