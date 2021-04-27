<?php

/**
 * 場合の数（1部もしくは全部を用いるパターンの種類）
 * A = 500円の枚数
 * B = 100円の枚数
 * C = 10円の枚数
 */

 $ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

//  [$A, $B, $C] = $ints();
//  echo ($A + 1) * ($B + 1) * ($C + 1) - 1 . PHP_EOL;