<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$S] = $strs();

$len = strlen($S);
$cnt = 0;
$max = 0;
for ($i = 0; $i < $len; $i ++) {
    if ($S[$i] === 'R') $cnt++;
    else {
        $max  = max($max, $cnt);
        $cnt = 0;
    }
    $max  = max($max, $cnt);
}
echo $max . PHP_EOL;