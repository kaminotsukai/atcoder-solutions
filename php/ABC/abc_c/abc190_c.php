<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$N, $M] = $ints();

$conditions = [];
for ($i = 0; $i < $M; $i++) $conditions[] = $ints();

[$K] = $ints();
$people= [];
for ($i = 0; $i < $K; $i++) $people[] = $ints();

$ans = 0;
function dfs(array $put, int $depth)
{
    global $K, $people, $ans;

    if ($depth === $K) {
        $ans = max($ans, judge($put));
        return;
    }

    for ($i = 0; $i < 2; $i++) {
        $put[] = $people[$depth][$i];
        dfs($put, $depth + 1);
        array_pop($put);
    }
}

function judge(array $put): int
{
    global $conditions;

    $cnt = 0;
    foreach ($conditions as $condition) {
        if (in_array($condition[0], $put) && in_array($condition[1], $put)) $cnt++;
    }
    return $cnt;
}

dfs([], 0);
echo $ans . PHP_EOL;