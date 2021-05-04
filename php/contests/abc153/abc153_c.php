<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * (モンスターをソートして、0..K-1除外したその他の総和) + K
 */

 [$N, $K] = $ints();
 $Hi = $ints();

 rsort($Hi);
 $cnt = 0;
 for ($i = $K; $i < $N; $i++ ) $cnt += $Hi[$i];
 echo $cnt . PHP_EOL;