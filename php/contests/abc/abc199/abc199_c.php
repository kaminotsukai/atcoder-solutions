<?php declare(strict_types = 1);

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));
$strs = fn () => array_map('strval', explode(' ', trim(fgets(STDIN))));
$printn = fn ($value) => print($value . PHP_EOL);

[$N] = $ints();
[$S] = $strs();
[$Q] = $ints();

$pre = substr($S, 0, $N);
$post = substr($S, $N, $N);

while ($Q--) {
    [$T, $A, $B] = $ints();

    if ($T === 1) {
        if ($A > $N && $B > $N) {
            $tmp = $post[$A - $N - 1];
            $post[$A - $N - 1] = $post[$B - $N - 1];
            $post[$B - $N - 1] = $tmp;
        } else if ($A <= $N && $B <= $N) {
            $tmp = $pre[$A - 1];
            $pre[$A - 1] = $pre[$B - 1];
            $pre[$B - 1] = $tmp;
        } else if ($A <= $N && $B > $N) {
            $tmp = $pre[$A - 1];
            $pre[$A - 1] = $post[$B - $N - 1];
            $post[$B - $N - 1] = $tmp;
        }
    } else {
        list($pre, $post) = [$post, $pre];
    }
}
echo $pre . $post . PHP_EOL;

