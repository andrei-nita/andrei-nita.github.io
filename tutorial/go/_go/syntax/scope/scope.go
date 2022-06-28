package main

import (
	"fmt"
	"syntax/scope/hello"
)

var x string = "Hello from global scope"

func init() {
	var a string = "Hello from block scope"
	fmt.Println("scope.go", a)
	fmt.Println("scope.go", x)
	fmt.Println("scope.go", hello.X)
}

func main() {
	var y string = "Hello from block scope"
	fmt.Println("scope.go", x)
	fmt.Println("scope.go", y)
	// fmt.Println("scope.go" ,a) // error undefined, available only for init block
	fmt.Println("scope.go", hello.X)
	// fmt.Println("scope.go" ,hello.z) // error undefined, not available
}
