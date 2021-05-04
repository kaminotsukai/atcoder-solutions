<?php declare(strict_types = 1);

require "numbers.php";


/**
 * 配列された要素から、最大値やまたは最小値を探索し配列最後の要素と入れ替えをおこなう
 * unstable sort
 * 最悪計算時間 - O(n**2)と遅い
 * 利点：非常に直感的で単純なアルゴリズムであり、実装も容易なため、
 *
 * @param array $numbers
 * @return array
 */
function selection_sort(array $numbers): array
{
    $limit = count($numbers);
    for ($i = 0; $i < $limit; $i ++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $limit; $j ++) {
            if ($numbers[$min_index] > $numbers[$j]) {
                $min_index = $j;
            }
        }

        // ここpythonだとnumbers[i], numbers[min_idx] = numbers[min_idx], numbers[i]でかえれる
        $tmp = $numbers[$min_index];
        $numbers[$min_index] = $numbers[$i];
        $numbers[$i] = $tmp;
    }

    return $numbers;
}

// 計測したい処理
print_r(randomNumbersArray());
print_r(selection_sort(randomNumbersArray()));