<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A] = $strs();
[$B] = $strs();

if ($A == $B) echo 'EQUAL';
else if ($A > $B) echo 'GREATER';
else echo 'LESS';
echo PHP_EOL;