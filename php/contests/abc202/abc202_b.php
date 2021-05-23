<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$s] = $strs();
$s = strrev($s);

for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] == '6') $s[$i] = '9';
    else if ($s[$i] == '9') $s[$i] = '6';
}
echo $s . PHP_EOL;