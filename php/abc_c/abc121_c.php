<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $M] = $ints();

$stores = [];
for ($i = 0; $i < $N; $i ++) {
    [$A, $B] = $ints();
    $stores[$A] = ($stores[$A] ?? 0) + $B;
}
ksort($stores);

$sum = 0;
foreach ($stores as $price => $ammount) {
    if ($M >= $ammount) {
        $sum += $price * $ammount;
        $M -= $ammount;
    } else {
        $sum += $price * $M;
        break;
    }
}

echo $sum . PHP_EOL;