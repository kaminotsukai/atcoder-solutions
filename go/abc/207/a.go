package main

import (
	"fmt"
)

func main() {
	var a, b, c int
	fmt.Scan(&a, &b, &c)

	// 3つの中から大きいもの2つの合計 = 3つの合計から最も小さい値を引いたもの
	fmt.Println(a + b + c - min(a, b, c))
}


func min(a ...int) int {
	x := 1<<61 - 1
	for i := 0; i < len(a); i++ {
		if a[i] < x {
			x = a[i]
		}
	}
	return x
}
