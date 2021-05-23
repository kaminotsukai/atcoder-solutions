<?php


$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b, $k] = $ints();

for ($i = 0; $i < 2 ** ($a + $b); $i++) {

    for ($j = 0; $j < $a + $b; $j++) {

        if ($i & (1 << $j)) {
            
        }
    }
}