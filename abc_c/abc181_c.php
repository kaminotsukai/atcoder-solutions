<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$xy = [];
for ($i = 0; $i < $N; $i ++) $xy[] = $ints();


echo solve($xy, $N) ? 'Yes' : 'No';
echo PHP_EOL;

function isTilt(array $a, array $b, array $c): bool
{
    $x1 = $a[0] - $b[0];
    $y1 = $a[1] - $b[1];
    $x2 = $b[0] - $c[0];
    $y2 = $b[1] - $c[1];

    // if ($x1 / $y1 === $x2 / $y2) return true;
    // 0除算が発生するため掛け算で判定するのがベター
    if ($x1 * $y2 === $x2 * $y1) return true;
    return false;
}

function solve($xy, $N)
{
    for ($i = 0; $i < $N; $i ++) {
        for ($j = $i + 1; $j < $N; $j ++) {
            for ($k = $j + 1; $k < $N; $k ++) {
                if (isTilt($xy[$i], $xy[$j], $xy[$k])) return true;
            }
        }
    }
    return false;
}