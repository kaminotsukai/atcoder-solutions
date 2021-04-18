<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$o] = $strs();
[$e] = $strs();

// 文字数を揃える
if (strlen($o) !== strlen($e)) $e .= ' ';

$pass = '';
for ($i = 0; $i < strlen($o); $i ++) $pass .= $o[$i] . $e[$i];
echo trim($pass) . PHP_EOL;


// 他の解き方
// [$o] = $strs();
// [$e] = $strs();

// $pass = '';
// for ($i = 0; $i < strlen($o); $i ++) {
//     $pass .= $o[$i];
//     if ($i < strlen($e)) $pass .= $e[$i];
// }
// echo $pass . PHP_EOL;