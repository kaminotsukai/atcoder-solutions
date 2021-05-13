<?php

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

[$base] = $ints();
//