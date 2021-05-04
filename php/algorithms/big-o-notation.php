<?php

// O(log(n)) ← わからない
function func2($n)
{
    if ($n <= 1) {
        return;
    } else {
        echo $n;
        func2($n);
    }
}

func2(10);


// O(n) nの値が増えるほど計算量が増える = forループ1回
function func3($numbers)
{
    foreach ($numbers as $number) {
        echo $number;
    }
}

func3([1, 2, 3, 4, 5]);

// O(n * log(n))


// O(n**2) = forループ2回
