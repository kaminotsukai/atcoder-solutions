<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

// function solve($num, $k, $digit)
// {
//     if ($num === 0) return $digit;

//     $result = intdiv($num, $k);
//     $digit++;
//     return solve($result, $k, $digit);
// }

// [$N, $K] = $ints();

// echo solve($N, $K, 0) . PHP_EOL;

$c = 0;
while ($N --) {
    $N = intdiv($N, $K);
    $c++;
}
echo $c . PHP_EOL;