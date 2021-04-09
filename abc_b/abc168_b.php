<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$K] = $ints();
[$S] = $strs();

echo strlen($S) > $K ? $S = substr($S, 0, $K) . '...' : $S;
echo PHP_EOL;