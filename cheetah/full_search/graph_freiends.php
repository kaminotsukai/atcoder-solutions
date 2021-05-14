<?php

$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

$friends = $strs();

$ans = 0;
$n = count($friends);

// 一人一人確認する
for ($i = 0; $i < $n; $i++) {
    $cnt = 0;

    for ($j = 0; $j < $n; $j++) {
        if ($i == $j) continue;

        // 友達がいたらカウント
        if ($friends[$i][$j] == 'Y') {
            $cnt++;

        // 友達がいない場合、友達の友達が友達が確認
        } else {
            for ($k = 0; $k < $n; $k++) {
                if ($friends[$j][$k] == 'Y' && $friends[$k][$i] == 'Y') {
                    $cnt++;
                    break;
                }
            }
        }
    }
    $ans = max($cnt, $ans);
}
echo $ans;