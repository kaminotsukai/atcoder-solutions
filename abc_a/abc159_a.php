<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $m] = $ints();

$cnt = 0;
for ($i = 0; $i < $n; $i ++) {
    for ($j = $i + 1; $j < $n; $j++) {
        $cnt ++;
    }
}

for ($i = 0; $i < $m; $i ++) {
    for ($j = $i + 1; $j < $m; $j++) {
        $cnt ++;
    }
}

printn($cnt);