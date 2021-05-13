<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

$numbers = $ints();
sort($numbers);

$numbers[0] ++;
echo array_product($numbers);