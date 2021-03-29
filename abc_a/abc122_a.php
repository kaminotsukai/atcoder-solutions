<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

function printn($value) {
    echo $value . PHP_EOL;
}

[$b] = $strs();

$pairs = ['A' => 'T', 'T' => 'A', 'C' => 'G', 'G' => 'C'];

printn($pairs[$b]);