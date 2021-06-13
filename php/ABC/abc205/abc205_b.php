<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));

[$n] = $ints();
$Ai = $ints();

sort($Ai);
$ans = true;
for ($i = 1; $i <= $n; $i++) {
    if ($i !== $Ai[$i - 1]) {
        $ans = false;
        break;
    }
}
echo $ans ? 'Yes' : 'No';
echo PHP_EOL;