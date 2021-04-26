<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();
$s_array = str_split($S);
$unique = array_unique($s_array);
echo 2 * count($unique) === count($s_array) ? 'Yes' : 'No';
echo PHP_EOL;
