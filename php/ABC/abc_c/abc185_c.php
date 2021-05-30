<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$L] = $ints();

$ans = 1;
for ($i = 1; $i <= 11; $i++) {
    $ans *= $L - $i;
    $ans /= $i;
}
echo $ans . PHP_EOL;
