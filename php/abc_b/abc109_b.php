<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$N] = $ints();

$Wi = [];
for ($i = 0; $i < $N; $i ++) $Wi[] = $strs()[0];

$ans = true;

// 重複チェック
if (array_unique($Wi) !== $Wi) $ans = false;

// しりとりチェック
for ($i = 0; $i < $N - 1; $i++) if ($Wi[$i][strlen($Wi[$i]) - 1] !== $Wi[$i + 1][0]) $ans = false;

echo $ans ? 'Yes' : 'No';
echo PHP_EOL;
