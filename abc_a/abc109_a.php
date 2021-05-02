<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B] = $ints();

$ans = false;
for ($i = 1; $i <= 3; $i ++) {
    if (($A * $B * $i) % 2 !== 0) $ans = true;
}
echo $ans ? 'Yes' : 'No';
echo PHP_EOL;