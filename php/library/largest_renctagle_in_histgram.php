<?php

/**
 * 最大長方形
 */
function largestRectangleInHistogram($Ai)
{
    $ans = 0;
    $list = [-1];
    array_push($Ai, 0);
    for ($i = 0; $i < count($Ai); $i++) {
        while (count($list) > 1 && $Ai[$list[count($list) - 1]] > $Ai[$i]) {
            $ans = max($Ai[$list[count($list) - 1]] * ($i - ($list[count($list) - 2] + 1)), $ans);
            array_pop($list);
        }
        $list[] = $i;
    }

    return $ans . PHP_EOL;
}