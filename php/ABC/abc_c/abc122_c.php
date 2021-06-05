<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$N, $Q] = $ints();
[$S] = $strs();

$c = 0;
$sum = [0];
for ($i = 0; $i < $N - 1; $i++) {
    if ($S[$i] . $S[$i + 1] == 'AC') $c++;
    $sum[$i + 1] = $c;
}

for ($i = 0; $i < $Q; $i++) {
    [$l, $r] = $ints();
    echo $sum[$r - 1] - $sum[$l - 1] . PHP_EOL;
}