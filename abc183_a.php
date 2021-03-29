<?php declare(strict_types = 1);

[$x] = ints();

echo $x >= 0
    ? $x . "\n"
    : 0 . "\n";

function ints(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function strs(): array
{
    return array_map('strval', explode(' ', trim(fgets(STDIN))));
}