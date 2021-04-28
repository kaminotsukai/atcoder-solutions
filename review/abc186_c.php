<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * [自分の回答] https://atcoder.jp/contests/abc186/submissions/22123461
 * [解説閲覧後の回答] https://atcoder.jp/contests/abc186/submissions/22123602
 *
 * 感想
 * - N進数への変換処理2時間がかかった（現状汚いコード）
 *  -> decoct - 8進数に変換するだけなら使えそう！
 *  -> base_convert - これはN進数に対応できる！（大きな数値の場合、doubleやfloatの性質上精度が下がる）
 * - 文字列の中に特定の文字列が含まれているかどうか確認する処理が少し汚い -> strposを使用する
 */

 [$N] = $ints();

 $ans = 0;
 for ($i = 1; $i <= $N; $i ++) {
    $s = $i . decoct($i);
    if (strpos($s, "7") === false) $ans ++;
 }
 echo $ans . PHP_EOL;