<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$a, $b, $c] = $ints();
$sum = $a + $b + $c;

if ($sum >= 22) {
    echo 'bust' . PHP_EOL;
} else {
    echo 'win' . PHP_EOL;
}
