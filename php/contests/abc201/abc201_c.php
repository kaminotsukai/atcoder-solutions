<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();

$marus = [];
for ($i = 0; $i < 10; $i++) if ($S[$i] === 'o') $marus[] = $i;

$ans = [];
for ($i = 0; $i < 10; $i++) {
    if ($S[$i] === 'x') continue;
    for ($j = 0; $j < 10; $j++) {
        if ($S[$j] === 'x') continue;
        for ($k = 0; $k < 10; $k++) {
            if ($S[$k] === 'x') continue;
            for ($l = 0; $l < 10; $l++) {
                if ($S[$l] === 'x') continue;
                $tmp = [$i, $j, $k, $l];

                $flag = true;
                foreach ($marus as $maru) {
                    if (!in_array($maru, $tmp)) $flag = false;
                }
                if ($flag) $ans[] = [$i, $j, $k, $l];
                $flag = true;
            }
        }
    }
}
echo count($ans) . PHP_EOL;


// <?php declare(strict_types = 1);

// $ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
// $strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
// $printn = fn ($value) => print($value . PHP_EOL);

// /**
//  * 全探索が可能（全探索ができるときは全探索する）
//  */

// [$s] = $strs();

// $ans = 0;
// foreach (range(0, 9999) as $v) {

//     $a = array_fill(0, 10, 0);
//     for ($i = 0; $i < 4; $i++) {
//         $a[$v % 10]++;
//         $v = intdiv($v, 10);
//     }

//     $ok = true;
//     for ($j = 0; $j < 10; $j++) {
//         if ($s[$j] === 'o' && $a[$j] === 0) $ok = false;
//         if ($s[$j] === 'x' && $a[$j] > 0) $ok = false;
//     }

//     if ($ok) $ans++;
// }
// echo $ans . PHP_EOL;