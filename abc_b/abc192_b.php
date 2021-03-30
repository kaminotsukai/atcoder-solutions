<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}
$isEven = fn (int $value) => $value % 2 === 0;
$isOdd = fn (int $value) => $value % 2 !== 0;

[$s] = $strs();

for ($i = 0; $i < strlen($s); $i++) {
    if ($isEven($i + 1) && ctype_upper($s[$i])) {
        continue;
    }
    if ($isOdd($i + 1) && ctype_lower($s[$i])) {
        continue;
    }
    printn('No');
    exit;
}

printn('Yes');


// 他人のコード
[$s] = $strs();
$n = strlen($s);

for ($i = 0; $i < $n; $i ++) {
    if ($isEven($i + 1)) {
        if (!ctype_upper($s[$i])) {
            printn('No');
            exit;
        }
    } else {
        if (!ctype_lower($s[$i])) {
            printn('No');
            exit;
        }
    }
}

printn('Yes');


