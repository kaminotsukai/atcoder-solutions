<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$a, $b] = $ints();














// ==============================================
// 死んだ俺の努力
// ==============================================
// $max = 0;
// for ($i = $b; $i >= $a; $i--) {
//     $nums = divisor($i);
//     foreach ($nums as $num) {
//         if ($b - $num >= $a) echo $b - $num . PHP_EOL; $max = max($max, gcd($i, $b - $num));
//     }
// }
// echo $max === 0 ? 1 : $max;
// echo PHP_EOL;

// function divisor(int $num): array
// {
//     $array = [];
//     for ($i = 1; $i * $i <= $num; $i ++) {
//         if ($num % $i === 0) {
//             $array[] = $i;
//             if ($i * $i != $num) $array[] = intdiv($num, $i);
//         }
//     }
//     sort($array);
//     return $array;
// }

// function gcd(int $a, int $b): int
// {
//     if ($a < $b) {
//         $tmp = $a;
//         $a = $b;
//         $b = $tmp;
//     }

//     if ($a % $b === 0) return $b;
//     return gcd($b, $a % $b);
// }