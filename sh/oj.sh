#!/bin/sh
echo $2
# testフォルダがある場合は削除する(ojコマンドがtestフォルダがあるとエラーになるから)
rm -rf test

# testcaseをdownload
oj d $1

# ファイルを作成する
array=( `echo $1 | tr -s '/' ' '`)
last_index=`expr ${#array[@]} - 1`

# テンプレートのコピー
if [ $2 = 'php' ]; then
  if [ -e "${array[${last_index}]}.php" ]; then
    echo "ファイルが存在するためテンプレートのコピーをスキップしました"
  else
    cp $PWD/sh/template.php "${array[${last_index}]}.php"
  fi
elif [ $2 = 'python3' ]; then
  if [ -e "${array[${last_index}]}.py" ]; then
    echo "ファイルが存在するためテンプレートのコピーをスキップしました"
  else
    cp $PWD/sh/template.py "${array[${last_index}]}.py"
  fi
else
  echo "第2引数に言語を指定してください"
fi