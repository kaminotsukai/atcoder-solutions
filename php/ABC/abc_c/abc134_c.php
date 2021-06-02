<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$N] = $ints();
$Ai = [];
for ($i = 0; $i < $N; $i++) $Ai[] = $ints()[0];

$left = $right = [0];
for ($i = 0; $i < $N; $i++) {
    $left[$i + 1] = max($left[$i], $Ai[$i]);
    $right[$i + 1] = max($right[$i], $Ai[$N - $i - 1]);
}

for ($i = 0; $i < $N; $i++) {
    echo max($left[$i], $right[$N - $i - 1]) . PHP_EOL;
}
