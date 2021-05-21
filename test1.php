<?php

$test = '';
for ($i=0; $i<10**5; $i++) {
    $test .= substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyz', 10)), 0, 10) . PHP_EOL;
}
echo 10**5 . PHP_EOL;
echo $test . PHP_EOL;