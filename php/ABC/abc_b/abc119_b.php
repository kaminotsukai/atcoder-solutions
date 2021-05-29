<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $ints();

$sum = 0;
while($N--) {
    [$price, $unit] = $strs();

    if ($unit === 'BTC') {
        $price = 380000 * (float)$price;
    }

    $sum += $price;
}

printn($sum);