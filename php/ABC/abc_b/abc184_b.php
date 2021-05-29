<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $x] = $ints();
$answers = $strs();

for ($i = 0; $i < $n; $i++) {

    if ($answers[0][$i] == 'x' && $x > 0) {
        $x--;
    }

    if ($answers[0][$i] == 'o') {
        $x++;
    }
}

printn($x);