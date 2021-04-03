<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $m, $x] = $ints();
$feeStationPoints = $ints();

$toFirstCount = 0;
$toLastCount = 0;
for ($i = 0; $i < $m; $i ++) {
    if ($feeStationPoints[$i] < $x) {
        $toFirstCount++;
    } else {
        $toLastCount++;
    }
}

echo min($toFirstCount, $toLastCount) . PHP_EOL;