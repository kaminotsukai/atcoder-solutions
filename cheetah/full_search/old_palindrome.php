<?php

$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$S] = $strs();

$str = $S;
for ($i = 1; $i < strlen($str); $i++) {
    if (strrev($S) === $S) break;
    $S .= $str[strlen($S) - 1 - $i];
}
echo strlen($S);