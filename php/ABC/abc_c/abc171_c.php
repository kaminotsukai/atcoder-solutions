<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n] = $ints();

$ans = '';
while ($n >= 1) {
    $n--;
    $ans .= chr(ord('a') + ($n % 26));
    $n /= 26;
}
echo strrev($ans) . PHP_EOL; // 進数変換のため逆からみる必要がある