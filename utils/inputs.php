<?php declare(strict_types = 1);

function ints(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}