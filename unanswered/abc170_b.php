<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$X, $Y] = $ints();

for ($i = $X; $i > 0; $i --) {
    if (
        $Y == $i * 4 + ($X - $i) * 2 ||
        $Y == $i * 2 + ($X - $i) * 4
    ) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;