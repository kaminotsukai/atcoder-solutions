<?php declare(strict_types = 1);

[$A, $B] = ints();

echo ($A * $B) . "\n";

function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}