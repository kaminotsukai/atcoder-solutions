<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$n, $m] = $ints();

$conditions = [];
for ($i = 0; $i < $m; $i++) $conditions[] = $ints();


/**
 * N桁の文字列を作成して、条件にあうものだけ配列に入れていく
 */

/**
 * - N桁であること
 * - s桁目がcであること
 */

echo solve($n) . PHP_EOL;

function solve($n)
{
    global $conditions, $m;

    $ans = true;
    foreach (range(0, 999) as $v) {
        $v = (string)$v;
        if (strlen($v) != $n) continue;

        for ($i = 0; $i < $m; $i ++) {
            if ($v[$conditions[$i][0] - 1] != $conditions[$i][1]) {
                $ans = false;
            }
        }

        if ($ans) return $v;
        $ans = true;
    }

    return -1;
}