package main

import (
	"fmt"
	"math"
)

const LIST_PRICE = 206

func main() {
	var n int
	fmt.Scan(&n)

	price := math.Floor(float64(n) * 1.08)
	switch {
		case price > LIST_PRICE:
			fmt.Println(":(")
		case price == LIST_PRICE:
			fmt.Println("so-so")
		case price < LIST_PRICE:
			fmt.Println("Yay!")
	}
}
