<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$num] = $strs();

$digits = strlen($num);

$sum = 0;
for ($i = 0; $i < $digits; $i ++) {
    $sum += $num[$i];
}

echo (int) $num % $sum === 0
    ? 'Yes' . PHP_EOL
    : 'No' . PHP_EOL;
