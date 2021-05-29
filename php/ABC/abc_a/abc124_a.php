<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B] = $ints();

$ans = 0;
$loop = 2;
while ($loop--) {

    // Aの方が大きい
    if ($A > $B) {
        $ans += $A;
        $A--;
    } else {
        $ans += $B;
        $B--;
    }
}

echo $ans . PHP_EOL;
