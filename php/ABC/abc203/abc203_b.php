<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n, $k] = $ints();

$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $k; $j++) {
        $room = (string)$i . '0' . (string)$j;
        $sum += (int)$room;
    }
}
echo $sum . PHP_EOL;