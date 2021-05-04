<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$L] = $ints();
$lastLength = $L % 12;
echo 12 ** $lastLength . PHP_EOL;

$loop = ceil($lastLength / 2);
for ($i = 0; $i < $loop; $i ++) {
    //
}