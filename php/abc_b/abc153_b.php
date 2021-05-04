<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$h, $n] = $ints();
$techniques = $ints();

echo $h <= array_sum($techniques)
    ? 'Yes'
    : 'No';

echo PHP_EOL;