package main

import (
	"fmt"
	"strings"
)

func main() {
	var (
		S          string
		res        string
		exceptStrs = []string{"a", "e", "i", "o", "u"}
	)
	fmt.Scan(&S)

	var isExists bool
	for _, s := range S {
		isExists = false
		for _, es := range exceptStrs {
			if string(s) == es || string(s) == strings.ToUpper(es) {
				isExists = true
				break
			}
		}

		if !isExists {
			res += string(s)
		}
	}
	fmt.Println(res)
}
