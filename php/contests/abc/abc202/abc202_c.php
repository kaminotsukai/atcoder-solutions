<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Ai = $ints();
$Bi = $ints();
$Ci = $ints();

$aHash = [];
foreach ($Ai as $a) $aHash[$a] = ($aHash[$a] ?? 0) + 1;

$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    $b = $Bi[$Ci[$i] - 1];
    $cnt += $aHash[$b] ?? 0;

}
echo $cnt . PHP_EOL;