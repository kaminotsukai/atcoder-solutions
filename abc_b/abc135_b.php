<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// 2回以上入れ替えないと昇順にできない場合は、必ずNOになる

[$N] = $ints();
$numbers = $ints();

$copy = $numbers;
sort($numbers);
$total = count($numbers);

$k = 0;
for ($i = 0; $i < $total; $i ++) {
    if ($copy[$i] != $numbers[$i]) {
        $k++;
    }
}

if ($k > 2) {
    printn('NO');
} else {
    printn('YES');
}

// function in_order(array $numbers): bool
// {
//     $total = count($numbers);
//     for ($i = 0; $i < $total - 1; $i ++) {
//         if ($numbers[$i] > $numbers[$i + 1]) {
//             return false;
//         }
//     }
//     return true;
// }

// $total = count($numbers);
// for ($i = 0; $i < $total - 1; $i ++) {
//     if ($numbers[$i] > $numbers[$i + 1]) {
//         $tmp = $numbers[$i];
//         $numbers[$i] = $numbers[$i + 1];
//         $numbers[$i + 1] = $tmp;
//         break;
//     }
// }

// echo in_order($numbers)
//     ? 'YES' . PHP_EOL
//     : 'NO' . PHP_EOL;
