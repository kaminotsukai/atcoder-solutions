<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);


/**
 * 順列を配列に格納（文字列）
 * 与えられた列のindexを取得
 */

[$n] = $ints();
$p = $ints();
$q = $ints();

$elements = [];
for ($i = 1; $i <= $n; $i++) $elements[] = $i;

$pi = $qi = 0;
$rows = iterator_to_array(permutation($elements));
sort($rows);
foreach ($rows as $key => $item) {
    if ($item == $p) $pi = $key + 1;
    if ($item == $q) $qi = $key + 1;
}
echo abs($pi - $qi) . PHP_EOL;

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
