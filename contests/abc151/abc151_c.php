<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * どこが間違えている？
 * => ACがでてWAがペナルティとして換算される
 * => 自分のコードではACされていないWAまでもカウントに含めていた
 * => 結論問題よむこと
 */
// [$N, $M] = $ints();
// $results = [];
// $acList = [];
// $waCnt = 0;
// for ($i = 0; $i < $M; $i ++) {
//     [$p, $s] = $strs();

//     // すでにACした問題に関しては以降カウントしない
//     if (isset($acList[$p])) continue;

//     if ($s == 'WA') $waCnt++;
//     if ($s == 'AC') $acList[$p] = 1;
// }

// echo count($acList) . ' ' . $waCnt . PHP_EOL;


/**
 * A  B  C  D
 * WA AC AC WA
 * AC WA AC
 * AC
 *
 * answer => 3 2
 */

[$N, $M] = $ints();

// 値の初期化
$isac = $iswa = array_fill(0, $N + 1, 0);
$ac = $wa = 0;
for ($i = 0; $i < $M; $i ++) {
    [$p, $s] = $strs();

    // ACしていたらスキップ
    if ($isac[$p]) continue;

    // 初AC
    if ($s === 'AC') $isac[$p] = 1;

    // WA
    if ($s === 'WA') $iswa[$p]++;
}

// ここでつまづいた
foreach ($isac as $key => $ans) {
    if ($ans) {
        $ac++;
        $wa += $iswa[$key];
    }
}

echo $ac . ' ' . $wa . PHP_EOL;
