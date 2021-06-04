<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));


[$N] = $ints();

$all = [];
$roads = [];
for ($i=0; $i < $N; $i++) {
    $roads[] = $ints();
    $all[] = $i;
}

$ans = 0;
$cnt = 0;
foreach (permutation($all) as $pattern) {
    for ($i = 0; $i < $N - 1; $i++) {
        $x = pow($roads[$pattern[$i]][0] - $roads[$pattern[$i + 1]][0], 2);
        $y = pow($roads[$pattern[$i]][1] - $roads[$pattern[$i + 1]][1], 2);
        $ans += sqrt($x + $y);
    }
    $cnt++;
}
echo $ans / $cnt . PHP_EOL;



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