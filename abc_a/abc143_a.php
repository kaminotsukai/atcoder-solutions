<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$a, $b] = $ints();

$gap = $a - $b * 2;

echo $gap < 0
    ? 0 . PHP_EOL
    : $gap . PHP_EOL;