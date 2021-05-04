<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


// 約数を求める問題
// O(N) = N**12 = LTE

// O(√N)
// Dで割り切れたらD/Nも同時に保存する
// https://algo-logic.info/divisor/

[$N] = $ints();

$limit = ceil(sqrt($N));
$results = [];
for ($i = 1; $i <= $limit; $i ++) {
    if ($N % $i === 0) {
        $results[] = $i;
        $results[] = $N / $i;
    }
}
$results = array_unique($results);
sort($results);
$printn(implode("\n", $results));