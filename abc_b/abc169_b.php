<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$sum = 1;
for ($i = 0; $i < $N; $i ++) {
    $sum *= $Ai[$i];
}

echo $sum > pow(10, 18) ? -1 : (int) $sum;
echo PHP_EOL;