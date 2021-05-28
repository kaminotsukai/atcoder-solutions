<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$num = $strs()[0];

$ans = '';
for ($i = 0; $i < pow(2, 3); $i++) {

    $sum = $num[0];
    $ops = [];
    for ($j = 0; $j < 3; $j++) {
        if ($i & (1 << $j)) {
            $sum += $num[$j + 1];
            $ops[] = '+';
        } else {
            $sum -= $num[$j + 1];
            $ops[] = '-';
        }
    }
    if ($sum === 7) {
        for ($j = 0; $j < 4; $j++) {
            if ($j === 3) $ans .= $num[$j] . '=7';
            else $ans .= $num[$j] . $ops[$j];
        }
        break;
    }
}
echo $ans . PHP_EOL;
