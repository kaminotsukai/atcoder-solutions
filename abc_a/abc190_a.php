<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

// a = 高橋 b = 青木 c = 0 = 青木くん-1
[$a, $b, $c] = $ints();

if ($a == $b) echo $c == 0 ? 'Aoki' : 'Takahashi';
else echo $a > $b ? 'Takahashi' : 'Aoki';

echo PHP_EOL;