<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$N] = $ints();

// 入力を取得
$loop = $N;
$Ai = [];
while($loop--) {
    $Ai[] = trim(fgets(STDIN));
}

// 最大値を出す
// for ($i = 0; $i < $N; $i ++) {
//     $copy = $Ai;
//     unset($copy[$i]);
//     echo max($copy) . PHP_EOL;
// }

$maxL = $maxR = [];
$maxL[0] = 0;
$maxR[0] = 0;
for ($i = 0; $i < $N; $i ++) $maxL[] = max($Ai[$i], $maxL[$i]);
$maxR[$N] = 0;
for ($i = $N - 1; $i >= 0; $i --) $maxR[] = max($Ai[$i], $maxR);

for ($i = 0; $i < $N; $i++) {
    $printn(max($maxL[$i], $maxR[$i + 1]));
}