<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 普通にやるとO(N2)
 * -> こういう問題に弱い
 */

[$N] = $ints();
$Ai = $ints();

$sum = 0;
$pairs = [];
foreach ($Ai as $a) $pairs[$a] = ($pairs[$a] ?? 0) + 1;

$keys = array_keys($pairs);
for ($i = 0; $i < count($pairs); $i ++) {
    for ($j = $i + 1; $j < count($pairs); $j ++) {
        $product = $pairs[$keys[$i]] * $pairs[$keys[$j]];
        $sum += pow(($keys[$i] - $keys[$j]), 2) * $product;
    }
}
echo $sum . PHP_EOL;