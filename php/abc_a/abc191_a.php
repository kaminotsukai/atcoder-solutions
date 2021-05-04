<?php declare(strict_types = 1);

[$V, $T, $S, $D] = ints();

if ($V * $T > $D || $V * $S < $D) {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}


function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}