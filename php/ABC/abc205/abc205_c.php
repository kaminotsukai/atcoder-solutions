<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$a, $b, $c] = $ints();


// どちらも正の場合
if ($a >= 0 && $b >= 0) {
    if ($a > $b) echo '>' . PHP_EOL;
    else if ($a < $b) echo '<' . PHP_EOL;
    else echo '=' . PHP_EOL;
}

// どちらも負の場合
if ($a < 0 && $b < 0) {
    $ap = $a * -1;
    $bp = $b * -1;

    if ($c % 2 === 0) {
        if ($ap > $bp) echo '>' . PHP_EOL;
        else if ($ap < $bp) echo '<' . PHP_EOL;
        else echo '=' . PHP_EOL;
    } else {
        if ($a > $b) echo '>' . PHP_EOL;
        else if ($a < $b) echo '<' . PHP_EOL;
        else echo '=' . PHP_EOL;
    }
}

// 片方が-
if ($a < 0 && $b >= 0) {
    $ap = $a * -1;

    if ($c % 2 === 0) {
        if ($ap > $b) echo '>' . PHP_EOL;
        else if ($ap < $b) echo '<' . PHP_EOL;
        else echo '=' . PHP_EOL;
    } else {
        echo '<' . PHP_EOL;
    }
}

if ($a >= 0 && $b < 0) {
    $bp = $b * -1;

    if ($c % 2 === 0) {
        if ($a > $bp) echo '>' . PHP_EOL;
        else if ($a < $bp) echo '<' . PHP_EOL;
        else echo '=' . PHP_EOL;
    } else {
        echo '>' . PHP_EOL;
    }
}

