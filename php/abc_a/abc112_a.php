<?php declare(strict_types = 1);

# 標準入力
$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

# 出力
function printn($value) {
    echo $value . PHP_EOL;
}

[$n] = $ints();

if ($n === 1) {
    printn('Hello World');
    exit;
}

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

printn($a + $b);