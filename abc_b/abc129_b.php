<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n] = $ints();
$nums = $ints();

$right = count($nums) - 1;
$left = 0;

$sumGroupA = 0;
$sumGroupB = 0;
while (true) {

    if ($sumGroupA <= $sumGroupB) {
        $sumGroupA += $nums[$left];
        $left++;
    } else {
        $sumGroupB += $nums[$right];
        $right--;
    }

    if ($right < $left) break;
}

echo abs($sumGroupA - $sumGroupB) . PHP_EOL;