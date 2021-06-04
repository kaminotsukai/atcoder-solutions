<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$N] = $ints();
$Ai = $ints();

echo largestRectangleInHistogram($Ai);

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