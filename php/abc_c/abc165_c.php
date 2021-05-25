<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M, $Q] = $ints();

$Ai = [];
for ($i = 0; $i < $Q; $i++) {

    // ここでデクリメントすることでindexを調整する
    $Ai[] = $ints();
    $Ai[$i][0]--;
    $Ai[$i][1]--;
}

$ans = 0;
function dfs($array)
{
    global $N, $M, $ans;

    // 末端まで行った時に判定する
    if (count($array) === $N) {
        $ans = max(score($array), $ans);
        return;
    }

    // 広義単調増加を表現
    // このような数列{ 1, 2, 1 }は条件を満たさないため作成しないようにする
    $array[] = $array[count($array)-1];
    while ($array[count($array) - 1] <= $M) {
        dfs($array);
        $array[count($array) - 1]++;
    }
}

function score($array)
{
    global $Ai;

    $sum = 0;
    foreach ($Ai as $a) {
        if ($array[$a[1]] - $array[$a[0]] === $a[2]) $sum += $a[3];
    }
    return $sum;
}

dfs([1]);
echo $ans . PHP_EOL;