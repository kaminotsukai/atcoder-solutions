<?php declare(strict_types = 1);

[$S] = strs();

echo $S . 'pp' . "\n";


function ints(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function strs(): array
{
    return array_map('strval', explode(' ', trim(fgets(STDIN))));
}