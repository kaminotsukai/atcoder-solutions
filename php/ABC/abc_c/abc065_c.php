<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * 合計得点が10の倍数の場合、10の倍数ではないもので最小の値の差が答え
 */

[$n] = $ints();

$s = [];
for ($i = 0; $i < $n; $i++) $s[] = $ints()[0];

$sum = array_sum($s);

if ($sum % 10 === 0) {
    sort($s);

    $flag = true;
    for ($j = 0; $j < count($s); $j++) {
        if ($s[$j] % 10 !== 0) {
            $sum -= $s[$j];
            $flag = false;
            break;
        }
    }

    echo $flag ? 0 : $sum;
} else {
    echo $sum;
}

echo PHP_EOL;