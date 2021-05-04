<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n, $s, $d] = $ints();

$inputs  = [];
for ($i = 0; $i < $n; $i ++) {
    $inputs[] = $ints();
}

foreach ($inputs as $input) {
    if ($input[0] < $s && $input[1] > $d) {
        printn('Yes');
        exit;
    }
}

printn('No');


/**
 * 他人のコード
 */
// [$n, $s, $d] = $ints();

// while($n --) {
//     $input = $ints();
//     if ($input[0] < $s && $input[1] > $d) {
//         printn('Yes');
//         exit;
//     }
// }

// printn('No');