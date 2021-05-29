<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $strs();

$sum = 0;
for ($i = 0; $i < strlen($N); $i++) {
    $sum += $N[$i];
}

if ($N % $sum === 0) {
    printn('Yes');
} else {
    printn('No');
}