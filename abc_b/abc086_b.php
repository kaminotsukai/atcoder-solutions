<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b] = $strs();

// 平方根を比べる時はキャストして比べるといい
$v = intval($a . $b);
$r = sqrt($v);
echo ($r == (int)$r) ? 'Yes' : 'No';
echo PHP_EOL;