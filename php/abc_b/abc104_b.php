<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$s] = $strs();

$len = strlen($s);

if ($s[0] != 'A') {
    echo 'WA' . PHP_EOL;
    exit;
}

$cntC = 0;
for ($i = 0; $i < $len; $i ++) {
    if ($i >= 2 && $i <= $len - 2 && $s[$i] === 'C') {
        $cntC++;
    }

    if ($cntC > 1) {
        echo 'WA' . PHP_EOL;
        exit;
    }

    if ($s[$i] != 'A' && $s[$i] != 'C') {
        if (ctype_upper($s[$i])) {
            echo 'WA' . PHP_EOL;
            exit;
        }
    }
}

if ($cntC != 1) {
    echo 'WA' . PHP_EOL;
    exit;
}

printn('AC');