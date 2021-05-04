<?php

$N = trim(fgets(STDIN));

$len = strlen($N);
$amaris = '';
for ($i = 0; $i < $len; $i ++) $amaris .= (string) ($N[$i] % 3);

$amari = (int) $N % 3;
if ($amari === 0) {
    echo 0 . PHP_EOL;
} else if ($amari === 1) {

    // 1を1つ
    if (strpos($amaris, 1) !== false) {
        $ans = 1 . PHP_EOL;
        exit;
    }

    // 2を2つ
    $array = str_replace($amaris, 2, '');
    if (strlen($amaris) - strlen($array) >= 2 && $len != 2) {
        $ans = 2;
    }

    echo -1 . PHP_EOL;
} else {

    // 2を1つ
    if (strpos($amaris, 2) !== false) {
        echo 1 . PHP_EOL;
        exit;
    }

    // 1を2つ
    $array = str_replace($amaris, 1, '');
    if (strlen($amaris) - strlen($array) >= 2 && $len != 2) {
        echo 2 . PHP_EOL;
        exit;
    }

    echo -1 . PHP_EOL;
}