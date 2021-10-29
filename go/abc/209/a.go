package main

import "fmt"

func main() {
	var a, b int
	fmt.Scan(&a, &b)

	result := b - a + 1
	if result < 0 {
		fmt.Println(0)
	} else {
		fmt.Println(result)
	}
}
