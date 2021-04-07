<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

[$N] = $ints();

// $cnt = 0;
// for ($i = 1; $i <= $N; $i ++) {
//     if ($i % 5 !== 0) {
//         $cnt++;
//     }
// }

// echo $cnt;

echo $N - intdiv($N, 5); // 5で割り切れる数の総数


