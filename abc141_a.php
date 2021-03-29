<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$s] = $strs();

switch ($s) {
    case 'Sunny':
        echo 'Cloudy' . PHP_EOL;
        break;
    case 'Cloudy':
        echo 'Rainy' . PHP_EOL;
        break;
    case 'Rainy':
        echo 'Sunny' . PHP_EOL;
        break;
    default:
        break;
}
