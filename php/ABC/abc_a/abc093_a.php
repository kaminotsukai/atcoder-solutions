<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$s] = $strs();
$strArray = str_split($s);
sort($strArray);

echo implode($strArray) === 'abc' ? 'Yes' : 'No';
echo PHP_EOL;
