<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * TEL回答はわかる
 */
function gcd($a, $b)
{
    if ($a < $b) [$a, $b] = [$b, $a];
    if ($b === 0) return $a;
    return gcd($b, $a % $b);
}

[$K] = $ints();

$sum = 0;
for ($i = 1; $i <= $K; $i ++) {
    for ($j = 1; $j <= $K; $j ++) {
        $tmp = gcd($i, $j);
        for ($k = 1; $k <= $K; $k ++) {
            $sum += gcd($k, $tmp);
        }
    }
}

echo $sum . PHP_EOL;