<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$max = 0;
for ($i = 1; $i <= $N; $i ++) {
    for ($j = $i; $j <= $N; $j ++) {
        $len = $j - $i + 1;
        $max = max(min(array_slice($Ai, $i - 1, $len)) * $len, $max);
    }
}
echo $max . PHP_EOL;