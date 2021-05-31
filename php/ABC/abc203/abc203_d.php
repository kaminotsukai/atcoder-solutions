<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n, $k] = $ints();

$park = [];
for ($i = 0; $i < $n; $i++) $park[] = $ints();

// 全探索
$lakeCandidates = [];
$count = 0;

$mid = $k ** 2 - (intdiv(pow($k, 2), 2) + 1);
$ans = INF;

for ($i = 0; $i < $n - $k + 1; $i++) {
    for ($j = 0; $j < $n - $k + 1; $j++) {
        for ($l = 0; $l < $k; $l++) {
            for ($m = 0; $m < $k; $m++) {
                $lakeCandidates[$count] = $park[$i + $l][$j + $m];
            }
        }
        sort($lakeCandidates);
        $ans = min($lakeCandidates[$count][$mid], $ans);
        $count ++;
    }
}

echo $ans . PHP_EOL;