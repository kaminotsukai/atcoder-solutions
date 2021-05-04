<?php declare(strict_types = 1);


// function binary_search(array $numbers, int $value): int
// {
//     $left = 0;
//     $right = count($numbers) - 1;

//     while ($left <= $right) {
//         $mid = (int) (($left + $right) / 2);
//         if ($numbers[$mid] === $value) {
//             return $mid;
//         }
//         else if($numbers[$mid] < $value) {
//             $left = $mid + 1;
//         }
//         else {
//             $right = $mid - 1;
//         }
//     }

//     return -1;
// }


/**
 * recursiveで実装した場合
 *
 * @param array $numbers
 * @param integer $value
 * @return integer
 */
function binary_search(array $numbers, int $value): int
{
    function _binary_search(array $numbers, int $value, int $left, int $right): int
    {
        if ($left > $right) {
            return -1;
        }

        $mid = (int) (($left + $right) / 2);

        if ($numbers[$mid] === $value) {
            return $mid;
        }

        if ($numbers[$mid] > $value) {
            return _binary_search($numbers, $value, $left, $mid - 1);
        }

        if ($numbers[$mid] < $value) {
            return _binary_search($numbers, $value, $mid + 1, $right);
        }

        return -1;
    }

    return _binary_search($numbers, $value, 0, count($numbers));
}

$nums = [1, 2, 6, 6, 10, 34, 50];
echo binary_search($nums, 34);