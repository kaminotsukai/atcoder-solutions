<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();
$Bi = $ints();

$sum = 0;
for ($i = 0; $i < $N; $i++) {
    $sum += $Ai[$i] * $Bi[$i];
}
echo $sum / $N == 0 ? 'Yes' : 'No';
echo PHP_EOL;