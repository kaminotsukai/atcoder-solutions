<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

$capacities = $ints();
$bottles = $ints();
$fromId = $ints();
$toId = $ints();

$loop = count($fromId);
for ($i = 0; $i < $loop; $i ++) {

    // よく使用するindexはここで定義する
    $t = $toId[$i];
    $f = $fromId[$i];

    $vol = min($bottles[$f], $capacities[$t] - $bottles[$t]);

    $bottles[$f] -= $vol;
    $bottles[$t] += $vol;
}
print_r($bottles);



