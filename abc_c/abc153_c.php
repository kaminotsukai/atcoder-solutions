<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

// N 闘うモンスター数
// K 必殺技の回数
// Hi モンスターの体力
// 最小値

// ソート count(Hi) - K 総和 Hi[-K]回 + Hi[K]

[$N, $K] = $ints();
$Hi = $ints();

$sum = 0;
$attackLoop = count($Hi) - $K;
sort($Hi);
for ($i = 0; $i < $attackLoop; $i++) {
    $sum += $Hi[$i];
}

$printn($sum);