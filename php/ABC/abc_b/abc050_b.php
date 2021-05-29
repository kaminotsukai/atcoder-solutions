<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}


// 条件
// - ドリンクそれぞれに対する全探索
// - 計算量(O(M*N))

[$N] = $ints();
$Ti = $ints(); // 試験の時間
[$M] = $ints(); // ドリンクの個数

// while ($M--) {
//     [$P, $X] = $ints();

//     $sum = 0;
//     for ($i = 0; $i < $N; $i ++) {
//         $sum += $P === $i + 1 ? $X : $Ti[$i];
//     }

//     printn($sum);
// }

$sum = array_sum($Ti);

// 計算量(O(M))
// 差分だけ更新パターン = 高速化の余地あり
while ($M--) {
    [$P, $X] = $ints();
    echo $sum - ($Ti[$P - 1] - $X) . PHP_EOL;
}