<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * 最大が9桁なので、左に0を0~9個つけて回文判定をすればいい
 * 回文(数値を文字列にして反転する)
 */

[$N] = $strs();
for ($i = 0; $i <= 9; $i ++) {
    $T = str_repeat('0', $i) . $N;
    if ($T == strrev($T)) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}

echo 'No' . PHP_EOL;




// // すでに回文
// $strr = strrev($N);
// if ($strr == $N) {
//     echo 'Yes' . PHP_EOL;
//     exit;
// }

// // 回文にできるか？
// $strr = (int)$strr;
// if ($strr == (int)strrev((string)$strr)) {
//     echo 'Yes' . PHP_EOL;
//     exit;
// }

// echo 'No' . PHP_EOL;