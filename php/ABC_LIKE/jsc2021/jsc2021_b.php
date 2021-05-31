<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n, $m] = $ints();
$Ai = $ints();
$Bi = $ints();

$adiff = array_diff($Ai, $Bi);
$bdiff = array_diff($Bi, $Ai);
$array = array_merge($adiff, $bdiff);
sort($array);
echo implode(' ', $array). PHP_EOL;
