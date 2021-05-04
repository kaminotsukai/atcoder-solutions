<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();
[$T] = $strs();

$len = strlen($S);
$cnt = 0;
for ($i = 0; $i < $len; $i++) {
    if ($S[$i] !== $T[$i]) $cnt ++;
}

echo $cnt . PHP_EOL;