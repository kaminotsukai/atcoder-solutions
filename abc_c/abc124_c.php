<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();

$len = strlen($S);

$wf = 0; // 最初に白の交互
$bf = 0; // 最初に黒の交互
$toggle = true;
for ($i = 1; $i <= 2; $i ++) {
    if ($i % 2 === 0 && $S[$i] == 1) $wf++;
    if ($i % 2 !== 0 && $S[$i] == 0) $wf++;
    if ($i % 2 === 0 && $S[$i] == 0) $bf++;
    if ($i % 2 !== 0 && $S[$i] == 1) $bf++;
}

echo min($wf, $bf) . PHP_EOL;
