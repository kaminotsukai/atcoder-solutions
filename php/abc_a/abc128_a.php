<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$a, $p] = $ints();

$p += $a * 3;
$total = (int)($p / 2);

printn($total);

// 他の人のコード
echo (int)floor((3 * $a + $p) / 2);