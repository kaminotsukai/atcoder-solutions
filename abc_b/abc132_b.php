<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n] = $ints();
$p = $ints();

$count = 0;
for ($i = 1; $i < $n - 1; $i++) {

    // 3つのペアを作成
    $array = [$p[$i - 1], $p[$i], $p[$i + 1]];

    // 作成した3つのペアをソートする
    sort($array);

    // ソートしても位置が変わっていなければカウントアップ
    if ($array[1] === $p[$i]) {
        $count++;
    }
}

printn($count);