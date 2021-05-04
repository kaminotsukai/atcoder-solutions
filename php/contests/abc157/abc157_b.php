<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


$card = [];
$card[] = $ints();
$card[] = $ints();
$card[] = $ints();

[$N] = $ints();

// 今回はここで詰まった
while ($N--) {
    [$pin] = $ints();
    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            if ($card[$x][$y] == $pin) {
                $card[$x][$y] = 0;
            }
        }
    }
}

$ans = false;

// 縦横の確認
for ($i = 0; $i < 3; $i++) {
    $ans = $card[$i][0] + $card[$i][1] + $card[$i][2] === 0 ? true : $ans;
    $ans = $card[0][$i] + $card[1][$i] + $card[2][$i] === 0 ? true : $ans;
}

// 斜め
$ans = $card[0][0] + $card[1][1] + $card[2][2] === 0 ? true : $ans;
$ans = $card[0][2] + $card[1][1] + $card[2][0] === 0 ? true : $ans;

echo $ans ? 'Yes' : 'No';
echo PHP_EOL;


