<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$A, $B, $C, $X, $Y] = $ints();

$total = 0;

// ABを買った方がお得
if ($A + $B > $C * 2) {
    if ($X > $Y) {
        $total += $Y * $C * 2;
        if ($A > 2 * $C) {
            $total += ($X - $Y) * 2 * $C;
        } else {
            $total += ($X - $Y) * $A;
        }
    } else {
        $total += $X * $C * 2;

        if ($B > 2 * $C) {
            $total += ($Y - $X) * 2 * $C;
        } else {
            $total += ($Y - $X) * $B;
        }
    }
} else {
    $total += $X * $A + $Y * $B;
}

echo $total . PHP_EOL;