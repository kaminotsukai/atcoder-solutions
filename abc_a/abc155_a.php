<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$Ai = $ints();
$unique = array_unique($Ai);
echo count($unique) === 2 ? 'Yes' : 'No';
echo PHP_EOL;
