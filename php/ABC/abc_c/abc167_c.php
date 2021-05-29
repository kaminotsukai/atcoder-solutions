<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


// 10**5回見ればいけそう？ X ... 10**5

[$N, $M, $X] = $ints();

$A = [];
for ($i = 0; $i < $N; $i ++) $A[] = $ints();

$ans = INF;

// 1 << $N => 1 ** Nを意味する
// 1 << 4 => 1000(2進数) = 16(10進数)
for ($bit = 0; $bit < (1 << $N); $bit++) {

    $books = [];
    for ($i = 0; $i < $N; $i++) {

        // 組み合わせの復元 (001 => Cだけ選択, 101 => A, C)
        if ($bit & (1 << $i)) $books[] = $i;
    }

    $ans = min($ans, totalComprehension($books));
}

echo $ans === INF ? -1 : $ans;
echo PHP_EOL;

// 与えられた書籍から得ることのできるトータルのスコア
function totalComprehension(array $books)
{
    global $A, $M, $X;

    $totalSkills = [];
    $totalPrice = 0;
    foreach ($books as $book) {
        for ($i = 0; $i < $M; $i ++) {
            $totalSkills[$i] = ($totalSkills[$i] ?? 0) + $A[$book][$i + 1];
        }
        $totalPrice += $A[$book][0];
    }
    if ($totalPrice === 0) return INF;

    $result = true;
    foreach ($totalSkills as $totalSkill) if ($totalSkill < $X) $result = false;
    if ($result === false) return INF;

    return $totalPrice;
}