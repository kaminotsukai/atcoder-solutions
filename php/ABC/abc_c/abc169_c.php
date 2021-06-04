<?php

$floats = fn () => array_map('floatval', explode(' ', trim(fgets(STDIN))));
$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$A, $B] = $strs();
echo bcmul($A, $B) . PHP_EOL;

