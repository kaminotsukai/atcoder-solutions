<?php

$a = [1, 2, 3, 4, 5];
$ans = [];
do {
    $ans[] = $a;
} while (next_permutation($a));
print_r($ans);

function next_permutation(array &$array)
{
    $size = count($array);
    if ($size <= 1) return $array;

    // 後方から最初に減少している要素を後方からチェック
    $i = $size - 2;
    while ($i >= 0 && ($array[$i] >= $array[$i + 1])) $i--;
    if ($i == -1) return false;

    // 存在した場合、次に大きな要素を後方からチェック
    if ($i >= 0) {
        $j = $size - 1;
        while ($j >= $i && (($array[$j] <= $array[$i]))) $j--;

        // 要素を入れ替える
        list($array[$i], $array[$j]) = [$array[$j], $array[$i]];
    }
    reverse($array, $i + 1);
    return true;
}

function reverse(array &$array, int $start)
{
    $end = count($array) - 1;

    while ($start < $end) {
        list($array[$start], $array[$end]) = [$array[$end], $array[$start]];
        $start++;
        $end--;
    }
}