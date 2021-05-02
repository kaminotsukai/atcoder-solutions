<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 解説1 - 全探索
 */

[$N] = $ints();
$loop = $N;

$xy = [];
while ($loop--) $xy[] = $ints();

$sum = 0;
$cnt = 0;
for ($i = 0; $i < $N; $i ++) {
    for ($j = 0; $j < $N; $j ++) {

        if ($i == $j) continue;
        $ijLength = sqrt(pow($xy[$i][0] - $xy[$j][0], 2) + pow($xy[$i][1] - $xy[$j][1], 2));

        for ($k = 0; $k < $N; $k ++) {

            if ($j == $k || $i == $k) continue;
            $jkLength = sqrt(pow($xy[$j][0] - $xy[$k][0], 2) + pow($xy[$j][1] - $xy[$k][1], 2));
            $sum += $ijLength + $jkLength;
            $cnt++;
        }
    }
}

if ($cnt === 0) {
    echo sqrt(pow($xy[0][0] - $xy[1][0], 2) + pow($xy[1][0] - $xy[1][1], 2)) . PHP_EOL;
    exit;
}

echo $sum / $cnt . PHP_EOL;