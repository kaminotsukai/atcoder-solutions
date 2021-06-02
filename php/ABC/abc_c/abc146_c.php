<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$a, $b, $x] = $ints();

$right = 10 ** 9 + 1;
$left = 0;
while ($right - $left > 1) {
    $mid = intdiv(($left + $right), 2);
    if ($x >= $a * $mid + $b * strlen($mid)) $left = $mid;
    else $right = $mid;
}
echo $left . PHP_EOL;