<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

$a = [];
while (1) {
    $a[] = $N % $K;
    $N = floor($N / $K);

    if ($N == 1) break;
}

$a = array_reverse($a);
echo implode($a) . PHP_EOL;