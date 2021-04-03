<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $ints();

$continuousCnt = 0;
for ($i = 0; $i < $N; $i ++) {
    [$a, $b] = $ints();

    if ($a === $b) {
        $continuousCnt++;
    } else {
        $continuousCnt = 0;
    }

    if ($continuousCnt >= 3) {
        printn('Yes');
        exit;
    }
}

printn('No');