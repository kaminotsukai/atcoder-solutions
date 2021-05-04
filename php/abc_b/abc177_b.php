<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();
[$T] = $strs();

$ans = strlen($S);
$loop = strlen($S) - strlen($T) + 1;
for ($i = 0; $i < $loop; $i ++) {

    $diff = 0;
    for ($j = 0; $j < strlen($T); $j ++) {
        if ($S[$i + $j] !== $T[$j]) $diff++;
    }
    $ans = min($ans, $diff);
}

echo $ans . PHP_EOL;