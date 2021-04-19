<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();
$Bi = $ints();

$cnt = 0;
for ($i = 0; $i < $N; $i ++) {

    // 2つの町を全て倒せる場合
    if ($Ai[$i] + $Ai[$i + 1] <= $Bi[$i]) {
        $cnt += $Ai[$i] + $Ai[$i + 1];
        $Ai[$i + 1] = 0;

    // 一つの町も全て倒せない
    } else if ($Ai[$i] > $Bi[$i]) {
        $cnt += $Bi[$i];

    // 1つの街を全て倒せる
    } else {
        $cnt += $Bi[$i];
        $Ai[$i + 1] = $Ai[$i] + $Ai[$i + 1] - $Bi[$i];
    }
}

echo $cnt . PHP_EOL;