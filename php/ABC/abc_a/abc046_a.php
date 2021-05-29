<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$a, $b, $c] = $ints();

$result = 3;
if ($a === $b) $result--;
if ($a === $c) $result--;
if ($b === $c) $result--;

echo $result === 0
    ? 1 . PHP_EOL
    : $result . PHP_EOL;