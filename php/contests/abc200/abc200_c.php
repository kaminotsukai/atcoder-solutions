<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$amaris = [];
foreach ($Ai as $a) {
    $amari = $a % 200;
    $amaris[$amari] = ($amaris[$a % 200] ?? 0) + 1;
}

$ans = 0;
foreach ($amaris as $value) $ans += $value * ($value - 1) / 2;
echo $ans  .  PHP_EOL;