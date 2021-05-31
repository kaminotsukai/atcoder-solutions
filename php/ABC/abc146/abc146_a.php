<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$mapping = [
    'SUN' => 7,
    'MON' => 6,
    'TUE' => 5,
    'WED' => 4,
    'THU' => 3,
    'FRI' => 2,
    'SAT' => 1
];

[$s] = $strs();

echo $mapping[$s] . PHP_EOL;