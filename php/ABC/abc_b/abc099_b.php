<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$a, $b] = $ints();

$diff = $b - $a;

$sum = 0;
for ($i = 1; $i <= $diff; $i++) {
    $sum += $i;
}

echo ($sum - $b) . PHP_EOL;


// 別の解き方
// [$a, $b] = $ints();
// $x = $b - $a;

// echo ($x * ($x + 1) / 2 - $b) . PHP_EOL;