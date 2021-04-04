<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

$word = trim(fgets(STDIN));
$indexs = $ints();

$wordArray = str_split($word);
for ($i = 0; $i < 4; $i ++) {
    $wordArray[$indexs[$i]] = "\"{$wordArray[$indexs[$i]]}";
}

$word = implode($wordArray);

printn($word);