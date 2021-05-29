<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
function printn($value) {
    echo $value . PHP_EOL;
}

/**
 * 4の約数 [4 ÷ 1, 4 ÷ 2...]割り切れるものの数 = 約数
 *
 * @param integer $num
 * @return integer
 */
function countDivisor(int $num): int
{
    $result = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i === 0) {
            $result++;
        }
    }
    return $result;
}


[$N] = $ints();

$result = 0;
for ($i = 1; $i <= $N; $i++) {
    $count = 0;
    if ($i % 2 === 0) {
        continue;
    }

    // 約数を求めるプログラム
    $count = countDivisor($i);

    if ($count === 8) {
        $result++;
    }
}


printn($result);