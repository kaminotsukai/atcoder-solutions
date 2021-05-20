<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

$flag = true;
$cnt = 0;
while ($flag) {
    $cnt++;
    foreach ($Ai as &$a) {
        if ($a % 2 !== 0) $flag = false;
        else $a /= 2;
    }
}
echo $cnt . PHP_EOL;