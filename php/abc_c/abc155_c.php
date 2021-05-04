<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$N] = $ints();

$words = [];
while ($N--) {

    // 出現回数を記録
    [$word] = $strs();
    $words[$word] = ($words[$word] ?? 0) + 1;
}

// 最大出現回数を取得
$maxCnt = max($words);
$results = array_keys($words, $maxCnt);
sort($results);

echo implode("\n", $results) . PHP_EOL;
