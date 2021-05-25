<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$ans = 0;

function dfs($x)
{
    global $N, $ans;

    // 桁数が超えると終了
    if ($x > $N) return;

    // 全て含まれているとcount up
    if (count(array_unique(str_split((string)$x))) === 3) $ans++;

    for ($i = 3; $i <= 7; $i += 2) dfs($x * 10 + $i);
}

dfs(0, 0);
echo $ans . PHP_EOL;