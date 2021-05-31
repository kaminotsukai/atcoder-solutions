<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$n, $m] = $ints();
echo ($n - 1) * ($m - 1) . PHP_EOL;