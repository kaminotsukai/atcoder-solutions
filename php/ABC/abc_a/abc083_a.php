<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$a, $b, $c, $d] = $ints();

$left = $a + $b;
$right = $c + $d;

if ($left > $right) {
    echo 'Left' . PHP_EOL;
} else if ($left < $right) {
    echo 'Right' . PHP_EOL;
} else {
    echo 'Balanced' . PHP_EOL;
}