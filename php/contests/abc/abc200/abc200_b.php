<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

for ($i = 0; $i < $K; $i ++) {
    if ($N % 200 === 0) {
        $N /= 200;
    } else {
        $N = (string) $N . '200';
    }
}
echo $N . PHP_EOL;