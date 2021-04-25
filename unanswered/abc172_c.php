<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M, $K] = $ints();
$Ai = $ints();
$Bi = $ints();

$cnt = 0;
while (1) {

    if ($Ai[0] === INF && $Bi[0] === INF) break;

    $last = $Ai[0] > $Bi[0]
        ? array_shift($Bi)
        : array_shift($Ai);

    if ($K - $last < 0) break;

    $K -= $last;
    $cnt++;
}

echo $cnt . PHP_EOL;