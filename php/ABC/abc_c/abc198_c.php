<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$R, $X, $Y] = $ints();

$cnt = 0;
$distance = sqrt(($X ** 2) + ($Y ** 2));
while (1) {

    // 到着したら終了
    if ($distance === 0) break;

    if ($distance / $R == intval($distance / $R)) {
        $cnt += $distance / $R;
        break;
    }

    // 直進する場合
    if (2 * $R < $distance) {
        $cnt++;
        $distance -= $R;
        continue;
    }

    // 曲がる場合
    $cnt += 2;
    $distance = 0;
}

echo $cnt . PHP_EOL;