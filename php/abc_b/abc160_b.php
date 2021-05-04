<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$X] = $ints();

$happy = 1000 * intdiv($X, 500);
$X = $X - 500 * intdiv($X, 500);
$happy += 5 * intdiv($X, 5);
echo $happy . PHP_EOL;

// $h = intdiv($X, 500);
// $div = $X % 500;
// $five += intdiv($div, 5);
// echo $h * 1000 + $five * 5;