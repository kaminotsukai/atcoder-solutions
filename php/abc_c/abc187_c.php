<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

[$n] = $ints();

$i = $n;
$words = [];
while ($i--) {
    $word = trim(fgets(STDIN));

    if ($word[0] == '!') {
        $replaceWord = str_replace('!', '', $word);
        if ($words[$replaceWord] ?? false) {
            printn($replaceWord);
            exit;
        }
        $words[$word] = 1;
    } else {
        $replaceWord = "!${word}";
        if ($words[$replaceWord] ?? false) {
            printn($word);
            exit;
        }
        $words[$word] = 1;
    }
}

printn('satisfiable');