<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$s] = $strs();

$len = strlen($s);

echo $s[$len - 1] === 's' ? $s . 'es' : $s . 's';
echo PHP_EOL;