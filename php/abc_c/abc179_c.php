<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $ints();

$cnt = 0;
for ($i = 1; $i <= $N; $i ++) {
    // $cnt += floor($N - 1 / $i) ;

    // intdivはfloorとか面倒やから使う
    $cnt += intdiv($N - 1, $i);
}

printn($cnt);