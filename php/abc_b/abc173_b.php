<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
$results = ['AC' => 0, 'WA' => 0, 'TLE' => 0, 'RE' => 0];
while($N--) {
    [$result] = $strs();
    $results[$result] += 1;
}

foreach ($results as $result => $count) {
    echo "$result x $count" . PHP_EOL;
}