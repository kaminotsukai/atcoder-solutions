<?php declare(strict_types = 1);

[$X, $t] = ints();

echo $X - $t <= 0
    ? 0 . "\n"
    : ($X - $t) . "\n";

function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}