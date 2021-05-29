<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$ai = $ints();
sort($ai);
echo $ai[1] - $ai[0] + $ai[2] - $ai[1] . PHP_EOL;