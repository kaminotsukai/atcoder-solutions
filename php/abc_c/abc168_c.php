<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B, $H, $M] = $ints();

$hDad = 2 * M_PI * ((60 * $H + $M) / 720);
$mRad = 2 * M_PI * ($M / 60);
$rad = abs($hDad - $mRad);

echo sqrt(pow($A, 2) + pow($B, 2) - 2 * $A * $B * cos($rad)) . PHP_EOL;