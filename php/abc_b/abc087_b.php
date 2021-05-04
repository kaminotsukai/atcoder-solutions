<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A] = $ints();
[$B] = $ints();
[$C] = $ints();
[$X] = $ints();


$cnt = 0;
for ($i = 0; $i <= $A; $i ++) {
    for ($j = 0; $j <= $B; $j ++) {
        for ($m = 0; $m <= $C; $m ++) {
            if (500 * $i + 100 * $j + 50 * $m === $X) $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;