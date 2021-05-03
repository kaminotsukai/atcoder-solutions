<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();

if ($S[2] === $S[3] && $S[4] === $S[5]) echo 'Yes' . PHP_EOL;
else echo 'No' . PHP_EOL;