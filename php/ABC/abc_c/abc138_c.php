<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$n] = $ints();
$vi = $ints();

while (count($vi) > 1) {
    sort($vi);
    $vi[] = ($vi[0] + $vi[1]) / 2;
    array_splice($vi, 0, 2);
}

echo $vi[0] . PHP_EOL;