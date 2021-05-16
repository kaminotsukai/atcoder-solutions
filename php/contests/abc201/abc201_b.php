<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$mountains = [];
while ($N--) {
    [$mountain, $height] = $strs();
    $mountains[$height] = $mountain;
}

krsort($mountains);
echo array_values($mountains)[1] . PHP_EOL;
