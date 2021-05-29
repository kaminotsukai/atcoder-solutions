<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$workA = [];
$workB = [];
for ($i = 0; $i < $N; $i++) {
    [$A, $B] = $ints();
    $workA[] = $A;
    $workB[] = $B;
}

$ans = PHP_INT_MAX;
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $ans = $i == $j
            ? min($ans, $workA[$i] + $workB[$j])
            : min($ans, max($workA[$i], $workB[$j]));
    }
}
echo $ans . PHP_EOL;