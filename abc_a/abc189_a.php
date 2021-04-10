<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$Ci] = $strs();
echo $Ci[0] == $Ci[1] && $Ci[1] == $Ci[2] ? "Won" : "Lost";
echo PHP_EOL;