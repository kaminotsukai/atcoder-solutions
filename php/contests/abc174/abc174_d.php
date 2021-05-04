<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 石の色を変えるパターンがわからない
 */

[$N] = $ints();
[$ci] = $strs();
$stones = str_split($ci);
$rstones = $stones;
sort($rstones);

$cnt = 0;
for ($i = 0; $i < $N / 2; $i ++) {
    if ($stones[$i] != $rstones[$i]) $cnt++;
}
echo $cnt . PHP_EOL;

