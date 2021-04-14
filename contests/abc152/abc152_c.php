<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Pi = $ints();


$cnt = 0;
$min = INF;
for ($i = 0; $i < $N; $i++) {
    $min = min($min, $Pi[$i]);
    if ($min == $Pi[$i]) $cnt++;
}
echo $cnt . PHP_EOL;