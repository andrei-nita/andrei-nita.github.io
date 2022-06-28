package main

func main() {
	var age int                   // define without initialization
	var age2 int = 42             // define with initialization
	var age3, age4 int = 42, 1302 // define/init multiple vars at once
	var age5 = 42                 // type omitted, will be inferred
	age6 := 42                    // shorthand, only in func bodies, implicit type
	const name = "Gopher"         // value cannot be changed
}
