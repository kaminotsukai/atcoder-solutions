<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$s] = $strs();

echo $s[0] === $s[1] && $s[1] === $s[2] ? 'No' . PHP_EOL : 'Yes' . PHP_EOL;
// echo $s === 'AAA' || $s === 'BBB' ? 'No' . PHP_EOL : 'Yes' . PHP_EOL;