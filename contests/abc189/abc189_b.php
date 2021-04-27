<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $X] = $ints();

$drunk = 0;
$cnt = 0;
for ($i = 1; $i <= $N; $i ++) {
    [$V, $P] = $ints();
    $drunk += ($V * $P);

    // 限界を超えると総数をカウントする
    if ($drunk > $X * 100) {
        $cnt = $i;
        break;
    }
}
echo $cnt > 0 ? $cnt . PHP_EOL : -1 . PHP_EOL;