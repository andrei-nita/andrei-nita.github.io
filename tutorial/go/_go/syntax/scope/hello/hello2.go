package hello

import "fmt"

func init() {
	fmt.Println("hello2.go", X) // from hello.go
	fmt.Println("hello2.go", z) // from hello.go
}
