<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$current = [0, 0];
$ans = true;
$beforePlanTime = 0;
for ($i = 0; $i < $N; $i++) {
    [$t, $x, $y] = $ints();

    $currentTime = $t - $beforePlanTime;
    $beforePlanTime = $t;

    $cost = abs($current[0] - $x) + abs($current[1] - $y);
    $current = [$x, $y];

    if (
        $cost > $currentTime ||
        $cost % 2 === 0 && $currentTime % 2 !== 0 ||
        $cost % 2 !== 0 && $currentTime % 2 === 0
    ) $ans = false;
}
echo $ans ? 'Yes' : 'No';
echo PHP_EOL;

