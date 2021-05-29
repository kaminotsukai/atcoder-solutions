<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $strs();
$digits = strlen($N);

$sum = 0;
for ($i = 0; $i < $digits; $i ++) {
    $sum += $N[$i];
}

$isMultipleOfNine = $sum % 9 === 0;

echo $isMultipleOfNine ? 'Yes'.PHP_EOL : 'No'.PHP_EOL;