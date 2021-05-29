<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b, $t] = $ints();

$ans = 0;
$i = 1;
while ($a * $i <= $t + 0.5) {
    $ans += $b;
    $i++;
}
echo $ans . PHP_EOL;