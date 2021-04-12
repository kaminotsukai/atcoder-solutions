<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$sum = 1;
for ($i = 0; $i < $N; $i ++) {
    $sum *= $Ai[$i];
}

echo $sum > pow(10, 18) ? -1 : (int) $sum;
echo PHP_EOL;


/**
 * 解説
 * 0が一つでも含まれると全て0になる
 * PHPは10**18まで扱えるのでそれを超えると正確な判定ができなくなる
 */

// [$N] = $ints();
// $Ai = $ints();

// if (in_array(0, $Ai, true)) {
//     echo 0 . PHP_EOL;
//     exit;
// }

// $sum = 1;
// for ($i = 0; $i < $N; $i ++) {
//     $sum *= $Ai[$i];
//     if ($sum > pow(10, 18)) {
//         echo -1 . PHP_EOL;
//         exit;
//     }
// }

// echo $sum . PHP_EOL;