<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b, $c, $d] = $ints();


if ($b > 0 && $d > 0) {
    echo $b * $d . PHP_EOL;
    exit;
}
if (($b >= 0 && $d < 0) || ($b < 0 && $d >= 0)) {
    echo $a * $d . PHP_EOL;
    exit;
}
if ($b <= 0 && $d <= 0) {
    echo $a * $c . PHP_EOL;
    exit;
}