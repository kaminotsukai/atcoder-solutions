<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$K] = $ints();

$cnt = 0;
for ($i = 1; $i <= $K; $i ++) {
    for ($j = $i + 1; $j <= $K; $j ++) {
        if ($i % 2 === 0 && $j % 2 !== 0 || $i % 2 !== 0 && $j % 2 === 0) $cnt++;
    }
}
echo $cnt . PHP_EOL;