<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $l] = $ints();


// 総和を求める
$numbers = [];
for ($i = $l; $i < $n + $l; $i++) {
    $numbers[] = $i;
}

$sum = array_sum($numbers);

if ($l >= 0) {
    echo ($sum - $l) . PHP_EOL;
} else {
    if ($numbers[$n - 1] >= 0) {
        echo $sum . PHP_EOL;
    } else {
        echo ($sum - $numbers[$n - 1]) . PHP_EOL;
    }
}

// 絶対値の最も小さい数が食べるべきりんご
// $min = 1000000000;
// $num = 1000000000;
// foreach ($numbers as $number) {
//     $min = $num = min($min, abs($number));
//     if ($number < 0) {
//         $num *= -1;
//     }
// }

// echo ($sum - $num) . PHP_EOL;