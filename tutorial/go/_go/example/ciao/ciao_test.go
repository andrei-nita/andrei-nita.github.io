package ciao

import "testing"

func TestCiao(t *testing.T) {
	type args struct {
		name string
	}
	tests := []struct {
		name string
		args args
		want string
	}{
		{name: "Name", args: args{name: "Gopher"}, want: "Ciao Gopher"},
		{name: "Emoji", args: args{name: "😀"}, want: "Ciao 😀"},
		{name: "China", args: args{name: "普里騰"}, want: "Ciao 普里騰"},
	}
	for _, tt := range tests {
		t.Run(tt.name, func(t *testing.T) {
			if got := Ciao(tt.args.name); got != tt.want {
				t.Errorf("Ciao() = %v, want %v", got, tt.want)
			}
		})
	}
}
