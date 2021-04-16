<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

/**
 * もっと綺麗に描けるはず
 */
[$a, $b, $k] = $ints();

// 高橋くんのクッキー
if ($a - $k < 0) {
    $b = $b - ($k - $a) > 0 ? $b - ($k - $a) : 0;
    echo 0 . ' ' . $b  . PHP_EOL;
} else {
    echo $a - $k . ' ' . $b . PHP_EOL;
}