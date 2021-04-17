<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $D] = $ints();

$cnt = 0;
while ($N--) {
    [$X, $Y] =$ints();
    if (sqrt(pow($X, 2) + pow($Y, 2)) <= $D) $cnt++;
}

echo $cnt . PHP_EOL;