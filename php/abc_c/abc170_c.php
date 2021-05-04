<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$X, $N] = $ints();
$pi = $ints();

echo solve($X, $pi) . PHP_EOL;

function solve($X, $pi)
{
    if (count($pi) === 0) return $X;

    for ($i = 0; $i <= $X; $i ++) {
        if (!in_array($X - $i, $pi)) return $X - $i;
        if (!in_array($X + $i, $pi)) return $X + $i;
    }
}

