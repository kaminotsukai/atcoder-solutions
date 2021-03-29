<?php declare(strict_types = 1);

[$a, $b] = ints();

echo (1 - $b / $a) * 100;

function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}


// ---------------------------
// 他の人の回答
// ---------------------------

/**
 * 問題文通りにA, Bと大文字で表記している
 */
[$A, $B] = ints();
echo (1 - $A / $B) * 100;