<?php

$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

$first = $strs();
$second = $strs();

$ans = 0;
for ($i = 0; $i < count($first); $i ++) {
    $i1 = $first[$i];
    $i2 = $second[$i];

    $total = 1;
    for ($j = $i + 1; $j < count($first); $j++) {
        if (
            $i1 === $first[$j] ||
            $i1 === $second[$j] ||
            $i2 === $first[$j] ||
            $i2 === $second[$j]
        ) $total ++;
    }
    $ans = max($total, $ans);
}
echo $ans . PHP_EOL;