#!/bin/sh

# testフォルダがある場合は削除する(ojコマンドがtestフォルダがあるとエラーになるから)
rm -rf /Users/kamimakoto/atcoder/test

# testcaseをdownload
oj d $1

# ファイルを作成する
array=( `echo $1 | tr -s '/' ' '`)
last_index=`expr ${#array[@]} - 1`
cp /Users/kamimakoto/atcoder/sh/template.php "${array[${last_index}]}.php"