<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 順番に見て、高くない展望台にfalseを入れ最終的にtrueの個数だけ数える
 */

[$N, $M] = $ints();
$Hi = $ints();

$observatories = array_fill(0, $N, 0);
for ($i = 0; $i < $M; $i++) {
    [$A, $B] = $ints();
    $Hi[$A - 1] > $Hi[$B - 1] ? $observatories[$B - 1] = -1 : $observatories[$A - 1] = -1;
    if ($Hi[$A - 1] == $Hi[$B - 1]) {
        $observatories[$A - 1] = -1;
        $observatories[$B - 1] = -1;
    }
}

$ans = 0;
foreach ($observatories as $observatory) {
    if ($observatory === 0) $ans++;
}
echo $ans . PHP_EOL;