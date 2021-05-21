<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n] = $ints();

$map = [];
for ($i = 0; $i < $n; $i++) {
    [$s] = $strs();
    $sArray = str_split($s);
    sort($sArray);
    $s = implode('', $sArray);
    $map[$s] = ($map[$s] ?? 0) + 1;
}

$cnt = 0;
foreach ($map as $item) {
    if ($item > 1) $cnt += ($item * ($item - 1)) / 2;
}
echo $cnt . PHP_EOL;