<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 解説：増加関数なので２分探索を使うとうまくいく
 */
[$A, $B, $X] = $ints();

$left = 0;
$right = pow(10, 9) + 1;

$ret = 0;
while ($left < $right) {
    $mid = intdiv(($left + $right), 2);
    $need = need($A, $B, $mid);
    if ($need <= $X) {
        $ret = $mid;
        $left = $mid + 1;
    } else {
        $right = $mid;
    }
}
echo $ret . PHP_EOL;

function need($a, $b, $n)
{
    $keta = strlen((string)$n);
	return $a * $n + $keta * $b;
}

// $left = 0;
// $right = 1000000001;

// $ret = 0;
// while ($left < $right) {
//     $mid = intdiv(($left + $right), 2);
//     $need = need($A, $B, $mid);
//     if ($need <= $X) {
//         $ret = $mid;
//         $left = $mid + 1;
//     } else {
//         $right = $mid;
//     }
// }
// echo $ret . PHP_EOL;

// function need($a, $b, $n)
// {
//     $keta = strlen((string)$n);
// 	return $a * $n + $keta * $b;
// }

// $digit = 1;
// while (1) {
//     $n = (string)intdiv($X - $B * $digit, $A);

//     // 購入できるN
//     if (strlen($n) === $digit) {
//         echo $n . PHP_EOL;
//         break;
//     }

//     // 購入できるNがない場合
//     if (strlen($n) < $digit) {
//         echo 0 . PHP_EOL;
//         break;
//     }

//     $digit++;
// }