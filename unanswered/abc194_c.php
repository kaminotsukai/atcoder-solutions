<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$sum = 0;
for ($i = 0; $i < $N; $i ++) {
    for ($j = $i + 1; $j < $N; $j ++) {
        $sum += ($Ai[$i] - $Ai[$j]) ** 2;
    }
}
echo $sum . PHP_EOL;