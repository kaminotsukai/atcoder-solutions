<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N, $K] = $ints();

$Ti = [];
for ($i = 0; $i < $N; $i ++) $Ti[$i] = $ints();

$patterns = [];
for ($i = 2; $i <= $N; $i ++) $patterns[] = $i;

$cnt = 0;
foreach (permutations($patterns) as $permutation) {
    $total = 0;
    $start = 0;
    foreach ($permutation as $city) {
        $total += $Ti[$start][$city - 1];
        $start = $city - 1;
    }
    $total += $Ti[$permutation[count($permutation) - 1] - 1][0];
    if ($total === $K) $cnt++;
}

echo $cnt . PHP_EOL;

function permutations(array $elements)
{
    if (count($elements) <= 1) {
        yield $elements;
    } else {
        foreach (permutations(array_slice($elements, 1)) as $permutation) {
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