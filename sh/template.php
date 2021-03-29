<?php declare(strict_types = 1);


function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}