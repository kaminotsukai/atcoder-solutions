<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();

$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 !== 0) $cnt++;
}

echo $cnt / $N . PHP_EOL;