<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


[$X] = $ints();
$deposit = 100;
$year = 0;
while ($X > $deposit) {
    $deposit = (int) bcmul((string)$deposit, (string) 1.01);
    $year++;
}

echo $year . PHP_EOL;