<?php

function gcd($a, $b)
{
    if ($a < $b) [$a, $b] = [$b, $a];
    if ($b === 0) return $a;
    return gcd($b, $a % $b);
}

echo gcd(1, 2);
