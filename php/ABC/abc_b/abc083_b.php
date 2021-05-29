<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $a, $b] = $ints();

$sum = 0;
// 1...nまでループ
for ($i = 1; $i <= $n; $i ++) {

    // 各桁の和を算出
    $len = strlen((string)$i);
    $digitSum = 0;
    for ($j = 0; $j < $len; $j ++) {
        $digitSum += (int)(((string)$i)[$j]);
    }

    // 各桁の和の条件チェック
    if ($digitSum >= $a && $digitSum <= $b) {
        $sum += $i;
    }
}

printn($sum);

// $sum = 0;
// // 1...nまでループ
// for ($i = 1; $i <= $n; $i ++) {

//     $digitSum = 0;

//     // 各桁の和を算出
//     preg_match_all("/[0-9]/", (string)$i, $match);
//     $digitSum += array_sum($match[0]);

//     // 各桁の和の条件チェック
//     if ($digitSum >= $a && $digitSum <= $b) {
//         $sum += $i;
//     }
// }
// printn($sum);
