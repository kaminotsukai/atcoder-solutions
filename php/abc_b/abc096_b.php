<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

$blackboardNums = $ints();
[$K] = $ints();
sort($blackboardNums);

for ($i = 0; $i < $K; $i++) {
    $blackboardNums[2] = $blackboardNums[2] * 2;
}

echo $blackboardNums[0] + $blackboardNums[1] + $blackboardNums[2];
echo PHP_EOL;