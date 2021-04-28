<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * - 現れる・現れない系の問題は初期値にfalseを入れて、一つづつ確認していく
 *
 * 中央値 - 16min
 * 自分 - 30min
 */

// マッピングデーターの生成
$mapping = [];
for ($i = 97; $i <= 122; $i ++) $mapping[chr($i)] = false;

[$s] = $strs();
for ($i = 0; $i < strlen($s); $i++) $mapping[$s[$i]] = true;

foreach ($mapping as $key => $item) {
    if (!$item) {
        echo $key . PHP_EOL;
        exit;
    }
}
echo 'None' . PHP_EOL;





// // 文字列を配列にしてソートする
// $strArray = str_split($s);
// $strArray = array_values(array_unique($strArray));
// sort($strArray);

// # 1の時は先に確認しておく
// if ($strArray[0] !== 'a') {
//     echo 'a' . PHP_EOL;
//     exit;
// }

// // aから順番に確認する
// $start = 97;
// for ($i = 0; $i < count($strArray); $i ++) {
//     $code = ord($strArray[$i]);
//     if ($code !== $start) {
//         echo chr($start) . PHP_EOL;
//         exit;
//     }
//     $start++;
// }

// // 最後の確認
// if ($strArray[count($strArray) - 1] !== 'z') {
//     echo 'z' . PHP_EOL;
//     exit;
// }

// echo 'None' . PHP_EOL;