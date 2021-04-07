<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$N] = $ints();

$min = INF;
while ($N--) {
    [$A, $P, $X] = $ints();
    if ($X - $A >= 1) $min = min($P, $min);
}
echo $min == INF ? -1 : $min;
echo PHP_EOL;