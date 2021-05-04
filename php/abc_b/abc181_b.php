<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $ints();

$result = 0;
// for ($i = 0; $i < $N; $i ++) {
//     [$start, $end] = $ints();
//     if (($end - $start) % 2 === 0) {
//         $result += ((int)($end - $start) / 2) * ($start + $end) + ($start + $end) / 2;
//     } else {
//         $result += ((int)(($end - $start) / 2) + 1) * ($start + $end);
//     }
// }

for ($i = 0; $i < $N; $i ++) {
    [$start, $end] = $ints();
    $result += ($start + $end) * ($end - $start + 1) / 2;
}

printn($result);


/**
 * 1...10の合計値は (1 + 10) * (10 - 1 + 1) / 2で出せる
 * a...bの合計は(a + b) * (b - a + 1) / 2
 */

