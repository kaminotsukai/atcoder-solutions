<?php declare(strict_types = 1);

/**
 * [$a, $b] = array(2)のように取得することが可能
 * ただし、[$a, $b, $c] = array(2)のように要素数と異なる場合はワーニングが出る
 */
[$a, $b] = ints();

/**
 * 標準入力は関数化して簡潔に書いていた
 */
function ints()
{
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}