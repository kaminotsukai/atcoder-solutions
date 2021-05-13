<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

$capacities = $ints();
$bottles = $ints();
$fromId = $ints();
$toId = $ints();

$loop = count($fromId);
for ($i = 0; $i < $loop; $i ++) {

    // 容量に入り切らない
    if ($capacities[$toId[$i]] < $bottles[$toId[$i]] + $bottles[$fromId[$i]]) {
        $bottles[$fromId[$i]] -= $capacities[$toId[$i]] - $bottles[$toId[$i]];
        $bottles[$toId[$i]] = $capacities[$toId[$i]];
    } else {
        $bottles[$toId[$i]] += $bottles[$fromId[$i]];
        $bottles[$fromId[$i]] = 0;
    }
}
print_r($bottles);



