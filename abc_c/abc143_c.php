<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
[$S] = $strs();

$len = strlen($S);
$ans = 1;
for ($i = 0; $i < $len - 1; $i ++) {
    if ($S[$i] != $S[$i + 1]) $ans++;
}
echo $ans . PHP_EOL;