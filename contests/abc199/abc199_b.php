<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();
$Bi = $ints();

$aMax = max($Ai);
$bMin = min($Bi);

echo $bMin - $aMax + 1 > 0 ? $bMin - $aMax + 1 : 0;
echo PHP_EOL;