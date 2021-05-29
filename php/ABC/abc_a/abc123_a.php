<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

$a = [];
$a[] = $ints()[0];
$a[] = $ints()[0];
$a[] = $ints()[0];
$a[] = $ints()[0];
$a[] = $ints()[0];
[$k] = $ints();

$ans = true;
for ($i = 0; $i < 5; $i++) {
    for ($j = $i + 1; $j < 5; $j++) {
        if ($a[$j] - $a[$i] > $k) $ans = false;
    }
}
echo $ans ? 'Yay!' : ':(';
echo PHP_EOL;