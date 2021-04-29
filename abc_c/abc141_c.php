<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K, $Q] = $ints();

$loop = $Q;
$list = array_fill(1, $N, 0);
while ($loop--) {
    [$A] = $ints();
    $list[$A] = ($list[$A] ?? 0) + 1;
}

ksort($list);

$ans = [];
$limit = $Q - $K;
foreach ($list as $a) $ans[] = $limit < $a ? 'Yes' : 'No';

echo implode("\n", $ans) . PHP_EOL;