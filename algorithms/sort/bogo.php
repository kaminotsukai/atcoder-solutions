<?php

/**
 * 要素をランダムに並び替える
 * 非常に効率の悪いアルゴリズム（運が悪いと揃わない
 * unstable sort
 */
function bogo_sort(array $numbers): array
{
    while (!in_order($numbers)) {
        shuffle($numbers);
    }

    return $numbers;
}

function in_order(array $numbers): bool
{
    // 要素の最大インデックスの-1回回せばいい
    for ($i = 0; $i < count($numbers) - 1; $i ++) {
        if ($numbers[$i] > $numbers[$i + 1]) {
            return false;
        }
    }
    return true;
}

print_r(bogo_sort([1, 2, 3, 4, 5]));