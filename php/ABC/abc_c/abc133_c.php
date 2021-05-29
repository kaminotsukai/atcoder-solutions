<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * L <= 2019 <= R && * 2019 <= L < R の場合は2019以上の最も最小の数値2つ
 * L < R < 2019 の場合は最も大きい数値2つ
 */

[$l, $r] = $ints();
$r = min($r, $l + 2019); // +2019以上は答えが変わらないから

$ans = PHP_INT_MAX;
for ($i = $l; $i <= $r; $i++) {
    for ($j = $i + 1; $j <= $r; $j++) {
        $ans = min($ans, ($i * $j) % 2019);
    }
}
echo $ans . PHP_EOL;