<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 最初の入れ替えの操作（ポイント - 反転処理を変数に持たせることでTLEを回避）
 * 隣接する同じ文字列の削除（ここで死んだ）
 */

[$S] = $strs();

$T = '';
$is_reverse = false;
$s1 = '';
$s2 = '';

for ($i = 0, $len = strlen($S); $i < $len; $i ++) {
    if ($S[$i] === 'R') $is_reverse = !$is_reverse;
    else if (!$is_reverse) $s2 .= $S[$i];
    else $s1 .= $S[$i];
}
$T = strrev($s1) . $s2;
if ($is_reverse) $T = strrev($T);

$stack = [];
foreach (str_split($T) as $t) {
    if (($stack[count($stack) - 1] ?? '') === $t) array_pop($stack);
    else $stack[] = $t;
}

echo implode('', $stack) . PHP_EOL;