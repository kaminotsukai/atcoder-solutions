<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

// [$N] = $ints();
// $nums = $ints();

// $copyNums = $nums;
// $nums = array_unique($nums);

// echo count($copyNums) === count($nums) ? 'YES' : 'NO';
// echo PHP_EOL;

/**
 * ソートして隣接する要素に重複しているものがあればNG
 */

[$N] = $ints();
$inputs = $ints();

sort($inputs);

$ans = true;
for ($i = 0; $i < count($inputs) - 1; $i ++) {
    if ($inputs[$i] == $inputs[$i + 1]) $ans = false;
}

echo $ans ? 'YES' : 'NO';
echo PHP_EOL;