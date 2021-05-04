<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


const MOD = 10 ** 9 + 7;

[$N] = $ints();
$Ai = $ints();

$left = $Ai[0];
$sum = 0;
for ($i = 1; $i < $N; $i ++) {
    $sum = ($sum + $left * $Ai[$i]) % MOD;
    $left = ($left + $Ai[$i]) % MOD;
}
echo $sum. PHP_EOL;