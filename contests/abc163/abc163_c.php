<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$members = array_fill(1, $N, 0);
foreach ($Ai as $a) $members[$a] += 1;
echo implode(PHP_EOL, $members) . PHP_EOL;
