## MEMO

**oj コマンドを使用する場合は、出力時に改行する必要がある**

**入力の文字と変数名を合わせることが多い**

**php_EOL は改行と同じ意味を持つ**

**Switch 文でかけるものは連想配列でもかける？**

```:php
// Switchで書いた場合
switch ($s) {
    case 'Sunny':
        echo 'Cloudy' . PHP_EOL;
        break;
    case 'Cloudy':
        echo 'Rainy' . PHP_EOL;
        break;
    case 'Rainy':
        echo 'Sunny' . PHP_EOL;
        break;
    default:
        break;
}

// 連想配列で書いた場合
$array= ["Sunny" => "Cloudy", "Cloudy" => "Rainy", "Rainy"=>"Sunny"];
```

**exit と return の違い**

http://blog.pionet.co.jp/experience/archives/487

**PHP が扱える数値の最大値は (9223372036854775807)**

**N 回改行された入力の受け取り方**

```:php
<?php
[$N] = $ints();

// デクリメントすることで0 = falseになって特定の回数で止まってくれる
while($N--){
    [$X, $Y] = $ints();
}
```

**１から n までの合計値**

```
N * (N + 1) / 2

10 * (10 + 1) / 2 = 55
```

**各桁の和を求めるときの方法**

```php

```

**二項係数のとき方（ある数の中から 2 つのものを取り出す）**

```
n * (n - 1) / 2
```
