<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();
$Ai = $ints();

// ソートして、３番目に大きい数が 1 / M*4以上の場合Yes
$limit = array_sum($Ai);
sort($Ai);

echo $Ai[count($Ai) - $M] < $limit * (1 / (4 * $M)) ? "No" : "Yes";
echo PHP_EOL;


// 1 / M*4以上の数がM個ある場合はYes
// $sum = array_sum($Ai);

// $cnt = 0;
// foreach ($Ai as $a) {
//     if ($a >= $sum * (1 / ($M * 4))) {
//         $cnt++;
//     }
// }

// echo $cnt >= $M ? 'Yes' : "No";
// echo PHP_EOL;