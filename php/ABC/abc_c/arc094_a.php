<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$A = $ints();
sort($A);

$ans  = 0;
while ($A[0] != $A[1] || $A[1] != $A[2]) {
    if ($A[2] - $A[0] >= 2) {
        $A[0] = $A[0] + 2;
    } else {
        $A[0] ++;
        $A[1] ++;
    }

    sort($A);
    $ans ++;
}
echo $ans . PHP_EOL;