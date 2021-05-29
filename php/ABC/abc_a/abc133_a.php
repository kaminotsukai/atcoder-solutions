<?php declare(strict_types = 1);

[$N, $A, $B] = ints();

echo $N * $A >= $B
    ? $B . "\n"
    : ($N * $A) . "\n";

function ints(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function strs(): array
{
    return array_map('strval', explode(' ', trim(fgets(STDIN))));
}