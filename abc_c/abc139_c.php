<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$Hi = $ints();

$move = 0;
$max = 0;
for ($i = 0; $i < $N - 1; $i ++) {
    if ($Hi[$i] >= $Hi[$i + 1]) $move++;
    else $move = 0;
    $max = max($move, $max);
}
echo $max . PHP_EOL;