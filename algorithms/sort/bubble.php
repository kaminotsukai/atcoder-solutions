<?php declare(strict_types = 1);


/**
 * 隣り合う要素の大小を比較しながら整列させる
 * 最悪計算時間 - O(n**2) - 少し遅い（学習専用の非効率的なアルゴリズムと考えられている）
 * 利点1 - アルゴリズムが単純
 * stable sort
 *
 * @return array
 */
function bubble_sort(array $numbers): array
{
    $limit = count($numbers);
    while ($limit --) {
        for ($i = 0; $i < $limit; $i ++) {
            if ($numbers[$i] > $numbers[$i + 1]) {
                $tmp = $numbers[$i];
                $numbers[$i] = $numbers[$i + 1];
                $numbers[$i + 1] = $tmp;
            }
        }
    }
    return $numbers;
}

function execute() {
    $numbers = array_slice(range(0, 1000), 1, 10);
    shuffle($numbers);

    print_r($numbers);
    print_r(bubble_sort($numbers));
}


execute();