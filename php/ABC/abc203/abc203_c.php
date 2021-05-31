<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n, $k] = $ints();

$paths = [];
for ($i = 0; $i < $n; $i++) {
    [$a, $b] = $ints();
    $paths[$a] = ($paths[$a] ?? 0) + $b;
}
ksort($paths);

$current = 0;
$money = $k;
foreach ($paths as $village => $yen) {
    $cost = $village - $current;

    if ($money >= $cost) {
        $money += $yen - $cost;
        $current = $village;
    } else {
        $current += $money;
        $money = 0;
        break;
    }
}

if ($money > 0) $current += $money;
echo $current . PHP_EOL;