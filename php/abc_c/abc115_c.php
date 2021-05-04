<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

$h = [];
for ($i = 0; $i < $N; $i ++) $h[] = $ints()[0];

sort($h);

$ans = INF;
$step = $K - 1;
for ($i = 0; $i <= $N - $K; $i ++) $ans = min($h[$i + $step] - $h[$i], $ans);
echo $ans . PHP_EOL;
