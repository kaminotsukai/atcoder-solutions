<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * a**bのペアはかなり少なくなるのでここに着目する
 */

[$N] = $ints();

$set = [];
for ($i = 2; $i * $i <= $N; $i++) {
    $x = $i * $i;
    while ($x <= $N) {
        $set[$x] = 1;
        $x *= $i;
    }
}
echo $N - count($set) . PHP_EOL;