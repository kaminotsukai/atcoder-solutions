<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $D, $H] = $ints();
$obstacles = [];
for ($i = 0; $i < $N; $i ++) $obstacles[] = $ints();

$min = INF;
foreach ($obstacles as $obstacle) {
    $tilt = ($H - $obstacle[1]) / ($D - $obstacle[0]);

    if ($H - ($tilt * $D) < 0) continue;
    if ($tilt <= 0) continue;
    $min = min($min, $tilt);
}

if ($min === INF) {
    echo 0 . PHP_EOL;
} else {
    echo $H - ($min * $D) . PHP_EOL;
}


