<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();
[$T] = $strs();

$len = strlen($T) - 1;
echo $S === substr($T, 0, $len) ? 'Yes' : 'No';
echo PHP_EOL;