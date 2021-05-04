<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

/**
 * 敗因
 * - ペアが重複してる場合はカウントしないと思っていた
 */

// [$N] = $ints();
// $L = $ints();

// if ($N <= 2) {
//     printn('0');
//     exit;
// }

// $unique = array_unique($L);
// $alignedUnique = array_values($unique);
// sort($alignedUnique);
// $total = count($alignedUnique);

// $result = 0;
// for ($i = 0; $i < $total; $i++) {
//     for ($j = $i + 1; $j < $total; $j++) {
//         for ($k = $j + 1; $k < $total; $k ++) {
//             if ($alignedUnique[$i] + $alignedUnique[$j] > $alignedUnique[$k]) {
//                 $result++;
//             }
//         }
//     }
// }

// printn(8 * $result);

[$N] = $ints();
$array = $ints();

sort($array);
$total = count($array);

$result = 0;
for ($i = 0; $i < $total; $i++) {
    for ($j = $i + 1; $j < $total; $j++) {
        for ($k = $j + 1; $k < $total; $k ++) {
            if ($array[$i] !== $array[$j] && $array[$j] !== $array[$k] && $array[$i] + $array[$j] > $array[$k]) {
                $result++;
            }
        }
    }
}

printn($result);