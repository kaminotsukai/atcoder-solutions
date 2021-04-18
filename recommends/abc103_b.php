<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * 文字列を扱う時はsubXXX系メソッドを意識する
 */

[$s] = $strs();
[$t] = $strs();

$len = strlen($s);
$ans = false;
for ($i = 0; $i <= $len; $i++) {
    if ($s === $t) {
        $ans = true;
        break;
    }
    $s = $s[$len - 1] . $s;
    $s = substr($s, 0, -1);

}
echo $ans ? 'Yes' . PHP_EOL : 'No' . PHP_EOL;