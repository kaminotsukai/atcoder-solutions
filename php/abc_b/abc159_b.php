<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * 愚直にパターン判定をすれば解ける
 */

 function isPalindrome(string $str): bool
 {
    return $str === strrev($str);
 }

[$S] = $strs();

$ans = true;

// 回文でない場合終了
if (!isPalindrome($S)) $ans = false;

// 前半が回文でない
$before = substr($S, 0, intdiv(strlen($S), 2));
if (!isPalindrome($before)) $ans = false;

// 後半が回文でない
$after = substr($S, intdiv((strlen($S) - 1), 2) + 1, intdiv(strlen($S), 2));
if (!isPalindrome($after)) $ans = false;

echo $ans ? 'Yes' : 'No';
echo PHP_EOL;