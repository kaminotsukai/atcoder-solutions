<?php

$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$S] = $strs();

echo find($S);

function find($s)
{
    for ($i = strlen($s); ; $i++) {
        $flag = true;

        for ($j = 0; $j < strlen($s); $j++) {
            if (($i - $j - 1) < strlen($s) && $s[$j] !== $s[$i - $j - 1]) {
                $flag = false;
                break;
            }
        }

        if ($flag) return $i;
    }
}