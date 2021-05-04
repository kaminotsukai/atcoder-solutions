<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// 自分のコード
// [$n] = $ints();
// $heights = $ints();

// $diffSum = 0;
// for ($i = 0; $i < $n - 1; $i++) {
//     if ($heights[$i] > $heights[$i + 1]) {
//         $diffSum += $heights[$i] - $heights[$i + 1];
//         $heights[$i + 1] = $heights[$i];
//     }
// }

// printn($diffSum);


// 成り立つ条件
// 1. 自分より背の高い人が前にいる時、自分は踏み台を使って背を高くしなければならない。
// 2. 自分の背が高くなることにより、後ろの人が「背が低いままで良い」などの得をすることは起こらない。
// 講義単調増加（増加する数列であり、隣り合う項が等しくても良い） - https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1183203871

[$N] = $ints();
$A = $ints();

$maxNum = 0;
$Bi = 0; // chokudaiさんはここまで問題通りに変数定義している
for ($i = 0; $i < $N; $i++) {
    $maxNum = max($maxNum, $A[$i]);
    $Bi += $maxNum - $A[$i];
}

printn($Bi);