<?php declare(strict_types = 1);

[$X] = ints();

// MEMO: "\n"をつけないとojコマンドでは落ちる
echo 100 - $X % 100 . "\n";

function ints(): array
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}