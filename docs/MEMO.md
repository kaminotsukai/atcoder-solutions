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
