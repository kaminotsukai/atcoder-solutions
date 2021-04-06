<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);




[$N] = $ints();
$Ai = $ints();

$mid = intdiv(count($Ai), 2);
$left = array_slice($Ai, 0, $mid);
$right = array_slice($Ai, $mid * -1, $mid);

$leftWinner = max($left);
$rightWinner = max($right);

$loser = min($leftWinner, $rightWinner);
echo array_search($loser, $Ai) + 1 . PHP_EOL;



// これはなぜTLE？
// function battle(array $members)
// {
//     $total = count($members);
//     $winners = [];

//     // 勝者を判定する
//     for ($i = 0; $i < $total -1; $i += 2) {
//         $winners[] = max($members[$i], $members[$i + 1]);
//     }

//     // 決勝戦まできたらこの処理を抜ける
//     if (count($winners) === 2) {
//         return $winners;
//     }

//     // 決勝戦じゃない場合は同じ処理を繰り返す
//     return battle($winners);
// }

// [$N] = $ints();
// $Ai = $ints();

// $winners = battle($Ai);
// $semiWinner = min($winners);
// echo array_search($semiWinner, $Ai) + 1 . PHP_EOL;