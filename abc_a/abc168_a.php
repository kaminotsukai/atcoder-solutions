<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 解説
 * マッピングを作成して、一の位と比較する
 */

 $mapping = [
     '0' => 'pon',
     '1' => 'pon',
     '2' => 'hon',
     '3' => 'bon',
     '4' => 'hon',
     '5' => 'hon',
     '6' => 'pon',
     '7' => 'hon',
     '8' => 'pon',
     '9' => 'hon',
 ];

 [$S] = $strs();

 echo $mapping[$S[strlen($S) - 1]] . PHP_EOL;