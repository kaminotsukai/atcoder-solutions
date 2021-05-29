<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();

$light_bulbs = [];
for ($i = 0; $i < $M; $i++) {
    $Si = $ints();
    array_shift($Si);
    $light_bulbs[$i] = $Si;
}

$Pi = $ints();

$count = 0;
for ($i = 0; $i < pow(2, $N); $i++) {

    $switches = array_fill(0, $N, 0);
    for ($j = 0; $j < $N; $j++) {
        if ($i & (1 << $j)) $switches[$j] = 1;
    }

    $flag = true;
    foreach ($light_bulbs as $key => $light_bulb) {

        $on_count = 0;
        foreach ($light_bulb as $switch) {
            if ($switches[$switch - 1]) $on_count++;
        }
        if ($on_count % 2 !== $Pi[$key]) $flag = false;
    }

    if ($flag) $count++;
}

echo $count . PHP_EOL;