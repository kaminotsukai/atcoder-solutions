<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n] = $ints();

$inputs = [];
for ($i = 0; $i < 2; $i ++) {
    $inputs[] = explode(' ', trim(fgets(STDIN)));
}

$sum = 0;
for ($i = 0; $i < $n; $i ++) {
    $sum += $inputs[0][$i] * $inputs[1][$i];
}

echo $sum === 0
    ? printn('Yes')
    : printn('No');
