<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n] = $ints();

if ($n % 2 === 0) {
    echo $n . PHP_EOL;
} else {
    echo $n * 2 . PHP_EOL;
}
