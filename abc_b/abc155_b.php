<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();

foreach ($Ai as $a) {
    if ($a % 2 === 0 && $a % 3 !== 0 && $a % 5 !== 0) {
        echo 'DENIED' . PHP_EOL;
        exit;
    }
}

echo 'APPROVED' . PHP_EOL;