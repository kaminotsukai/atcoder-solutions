<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$n, $a, $b] = $ints();

$total = $n - $a < 0
    ? 0
    : $n - $a;

echo ($total + $b) . PHP_EOL;