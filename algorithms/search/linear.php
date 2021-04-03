<?php declare(strict_types = 1);

/**
 * 値が存在するインデックス番号を返却する。ない場合は-1を入れる
 *
 * @param array $numbers
 * @param integer $value
 * @return integer
 */
function linear_search(array $numbers, int $value): int
{
    for ($i = 0; $i < count($numbers); $i ++) {
        if ($numbers[$i] == $value) {
            return $i;
        }
    }
    return -1;
}

$nums = [0, 1, 2, 3, 4, 5];
print(linear_search($nums, 2));