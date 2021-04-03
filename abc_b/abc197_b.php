<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

// [$H, $W, $X, $Y] = $ints();

// # 入力取得
// $board = [];
// $i = $H;
// while ($i--) {
//     $board[] = trim(fgets(STDIN));
// }

// $result = 0;

// # 自分の位置
// $point = $board[$X - 1][$Y - 1];

// # 横のチェック
// $rightIdx = ($Y + 1 <= $W ? $Y + 1 : $W) - 1;
// $leftIdx = ($Y - 1 >= 1 ? $Y - 1 : 1) - 1;
// if ($board[$X - 1][$rightIdx] === '.') {
//     $result++;
// }
// if ($board[$X - 1][$leftIdx] === '.') {
//     $result++;
// }

// # 縦のチェック
// $topIdx = ($X - 1 >= 1 ? $X - 1 : 1) - 1;
// $downIdx = ($X + 1 <= $H ? $X + 1 : 1) - 1;
// if ($board[$topIdx][$Y - 1] === '.') {
//     $result++;
// }
// if ($board[$downIdx][$Y - 1] === '.') {
//     $result++;
// }

// printn($result + 1);


[$H, $W, $X, $Y] = $ints();

$board = [];
for ($i = 0; $i < $H; $i ++) {
    $board[] = trim(fgets(STDIN));
}

$result = 0;
$y = $Y - 1;
$x = $X - 1;

# 左右のチェック
if ($y !== 0) {
    for ($j = $y - 1; $j >= 0; $j --) {
        if ($board[$x][$j] === '#') break;
        if ($board[$x][$j] === '.') {
            $result++;
        }
    }
}
if ($y !== $W - 1) {
    for ($j = $y + 1; $j < $W; $j ++) {
        if ($board[$x][$j] === '#') break;
        if ($board[$x][$j] === '.') {
            $result++;
        }
    }
}

# 上下のチェック
if ($x !== 0) {
    for ($j = $x - 1; $j >= 0; $j --) {
        if ($board[$j][$y] === '#') break;
        if ($board[$j][$y] === '.') {
            $result++;
        }
    }
}
if ($x !== $H - 1) {
    for ($j = $x + 1; $j < $H; $j ++) {
        if ($board[$j][$y] === '#') break;
        if ($board[$j][$y] === '.') {
            $result++;
        }
    }
}

echo $result + 1 . PHP_EOL;
