<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$H, $W, $K] = $ints();

$board = [];
for ($i = 0; $i < $H ; $i++ ) $board[] = $strs()[0];

$cnt = 0;
for ($i = 0; $i < 2 ** $H; $i++) {
    for ($j = 0; $j < 2 ** $W; $j++) {
        $h = str_pad((string) decbin($i), $H, '0', STR_PAD_LEFT);
        $w = str_pad((string) decbin($j), $W, '0', STR_PAD_LEFT);

        $bCnt = 0;
        for ($k = 0; $k < $H; $k++) {
            for ($l = 0; $l < $W; $l++) {
                if ($h[$k] == 0 && $w[$l] == 0 && $board[$k][$l] == '#') $bCnt++;
            }
        }
        if ($bCnt === $K) $cnt++;
    }
}
echo $cnt . PHP_EOL;