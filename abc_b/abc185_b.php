<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M, $T] = $ints();

$max = $N;
$s = 0;
while ($M--) {
    [$A, $B] = $ints();

    // カフェに入るまで
    $N -= ($A - $s);
    if ($N <= 0) break;

    // カフェにいる間
    $N = min($max, $N + ($B - $A));
    $s = $B;
}

$N -= $T - $B;
echo $N <= 0 ? 'No' : 'Yes';
echo PHP_EOL;