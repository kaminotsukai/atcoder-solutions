<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$x] = $ints();

function isPrime(int $num): bool
{
    if ($num === 1) return false;
    for ($i = 2; $i * $i < $num; $i ++) {
        if ($num % $i === 0) return false;
    }
    return true;
}

while (1) {
    if (isPrime($x)) {
        echo $x. PHP_EOL;
        break;
    }
    $x++;
}