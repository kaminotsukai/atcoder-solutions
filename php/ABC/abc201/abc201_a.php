<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$A = $ints();
sort($A);

$step1 = $A[1] - $A[0];
$step2 = $A[2] - $A[1];

echo $step1 === $step2 ? 'Yes' : 'No';
echo PHP_EOL;