<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 3つの数字全てに対してループを回すと2500 ** 3でTLEする
 * 2つの数字が決まれば最後の1つの数字が決まるので2重ループで対応できる
 */
[$k, $s] = $ints();

$cnt = 0;
for ($i = 0; $i <= $k; $i++) {
    for ($j = 0; $j <= $k; $j++) {
        if ($s - ($i + $j) <= $k && $s - ($i + $j) >= 0) $cnt++;
    }
}
echo $cnt . PHP_EOL;