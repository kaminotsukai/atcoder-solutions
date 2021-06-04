<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$a, $b] = $ints();

$ans = -1;
for ($i = 1; $i <= 1250; $i++) {
    $aYen = floor($i * 0.08);
    $bYen = floor($i * 0.1);

    if ($aYen == $a && $bYen == $b) {
        $ans = $i;
        break;
    }
}
echo $ans . PHP_EOL;
