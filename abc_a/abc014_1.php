<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$a] = $ints();
[$b] = $ints();

echo $a % $b === 0
    ? 0
    : $b - $a % $b;

echo PHP_EOL;
