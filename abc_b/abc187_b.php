<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

function calcTilt(array $coordinate1, array $coordinate2): float
{
    $xDiff = abs($coordinate1[0] - $coordinate2[0]);
    $yDiff = abs($coordinate1[1] - $coordinate2[1]);

    return $yDiff / $xDiff;
}

[$N] = $ints();

$coordinates = [];
for ($i = 0; $i < $N; $i++) {
    $coordinates[] = $ints();
}

$result = 0;
for ($i = 0; $i < $N; $i ++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $tilt = calcTilt($coordinates[$i], $coordinates[$j]);
        if ($tilt >= -1 && $tilt <= 1) {
            $result++;
        }
    }
}

printn($result);