<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// [$n] = $ints();

// $i = $n;
// $words = [];
// while ($i--) {
//     $words[] = trim(fgets(STDIN));
// }

// echo count(array_unique($words)) . PHP_EOL;


[$n] = $ints();
$i = $n;
$array = [];
while ($i--) {
    $word = trim(fgets(STDIN));
    $array[$word] = 1;
}

echo count($array) . PHP_EOL;