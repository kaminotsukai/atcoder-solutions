<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

$result = $N;
// O(N) 10**5
while ($K--) {
    $array = str_split((string)$result);
    sort($array);
    $asc = (int)implode($array);
    rsort($array);
    $desc = (int)implode($array);

    $result = $desc - $asc;
}

$printn($result);
