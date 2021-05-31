<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

$a = $ints();

sort($a);

$before = $a[0];
if ($a[0] === $a[1]) echo $a[2];
else if ($a[1] === $a[2]) echo $a[0];
else echo 0;
echo PHP_EOL;

