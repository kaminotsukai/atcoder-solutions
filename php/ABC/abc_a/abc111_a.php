<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $strs();

for ($i = 0; $i < strlen($N); $i ++) {
    if ($N[$i] == '9') $N[$i] = '1';
    else if ($N[$i] == '1') $N[$i] = '9';
}
echo $N . PHP_EOL;