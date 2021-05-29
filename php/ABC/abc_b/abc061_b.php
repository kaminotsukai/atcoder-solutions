<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();

$map = array_fill(1, $N, 0);
while ($M--) {
    [$A, $B] = $ints();
    $map[$A]++;
    $map[$B]++;
}

foreach ($map as $item) echo $item . PHP_EOL;