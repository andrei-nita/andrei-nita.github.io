package hello

import "fmt"

// X is capitalized
// is available to main.go
var X string = "Hello from project scope"

// z is not capitalized
// z is not available to main.go
var z string = "Hello from package scope"

func init() {
	fmt.Println("hello.go", z)
}
