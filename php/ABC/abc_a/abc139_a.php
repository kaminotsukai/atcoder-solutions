<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$s] = $strs();
[$t] = $strs();

$cnt = 0;
for ($i = 0; $i < 3; $i ++) {
    if ($s[$i] === $t[$i]) $cnt++;
}
echo $cnt . PHP_EOL;