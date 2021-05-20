<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 
 */

[$S] = $strs();

$len = strlen($S) - 1;
$ans = 0;
for ($i = 0; $i < 2 ** $len ; $i++) {

    $total = 0;
    $a = $S[0];
    for ($j = 0; $j < $len; $j++) {
        if ($i >> $j & 1) {
            $total += $a;
            $a = 0;
        }
        $a = $a * 10 + $S[$j + 1];
    }
    $total += $a;
    $ans += $total;
}
echo $ans . PHP_EOL;
