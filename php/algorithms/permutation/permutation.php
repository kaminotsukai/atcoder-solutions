<?php

$elements = array_map('intval', explode(' ', trim(fgets(STDIN))));


function permutation(array $elements)
{
    if (count($elements) <= 1) {
        yield $elements;
    } else {
        foreach (permutation(array_slice($elements, 1)) as $permutation) {
            foreach (range(0, count($elements) - 1) as $i) {
                yield array_merge(
                    array_slice($permutation, 0, $i),
                    [$elements[0]],
                    array_slice($permutation, $i)
                );
            }
        }
    }
}
foreach (permutation($elements) as $item) echo implode(',', $item) . PHP_EOL;