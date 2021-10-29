package main

import (
	"fmt"
	"sort"
)

func main() {
	slice := make([]int, 3)
	fmt.Scanln(&slice[0], &slice[1], &slice[2])

	sort.Ints(slice)
	fmt.Println(slice[1] + slice[2])
}
