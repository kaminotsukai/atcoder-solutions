<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Hi = $ints();

// array_xx系のメソッドで配列を破壊的に変更すると時間がかかるため、別配列に追加していく形式で確認
$stack = [$Hi[0]];
for ($i = 0; $i < $N - 1; $i ++) {
    if ($stack[$i] < $Hi[$i + 1]) {
        $stack[] = $Hi[$i + 1] - 1;
    } else {
        $stack[] = $Hi[$i + 1];
    }
}
$stackCp = $stack;
sort($stackCp);
echo $stack == $stackCp ? 'Yes' : 'No';
echo PHP_EOL;