## C問題 = 重複を確認する問題

- ソートしてから隣接する要素の重複をチェック
- 素直に言語標準関数の配列重複削除などを使用する

## D問題 = 累積和を用いてTLEを避ける問題

自分の提出(TLE) - https://atcoder.jp/contests/abc154/submissions/21743295

**前提知識**

- 期待値の計算（https://bellcurve.jp/statistics/course/6349.html）
- 累積和（https://qiita.com/drken/items/56a6b68edef8fc605821）

**手順**

1. それぞれの期待を求める
2. 「N個の中からK個選んで、その和の最大値を求める」という問いなので、累積和が使用できる
3. 累積和の前処理を行う
4. 最大値を繰り返し確認する

**計算量**

- 前：O(N(N-K))
- 今：O(N + (N - K))

**memo**

- cusum = 累積和
