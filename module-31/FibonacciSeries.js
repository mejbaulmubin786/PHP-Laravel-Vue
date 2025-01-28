/*
Fibonacci Series

বাং
Problem Statement
Write a program to print fibonacci series.

Input
The program will take an integer 
N
N as input.

Output
The output will print a series of fibonacci numbers.

Constraints
0 ≤ N ≤ 1000
Example:
Enter Number

Input:
7
Output:
0 1 1 2 3 5 8
Notes:
None*/
function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	function fibonacciSeries(N) {
		if (N < 0 || N > 1000) {
			console.log("Invalid input. Please enter a number between 0 and 1000.");
			return;
		}

		const series = [];
		let a = 0,
			b = 1;

		for (let i = 0; i < N; i++) {
			series.push(a);
			[a, b] = [b, a + b];
		}

		console.log(series.join(" "));
	}
	const N = parseInt(input, 10);

	if (isNaN(N)) {
		console.log("Invalid input. Please enter a valid number.");
		return;
	}

	fibonacciSeries(N);
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
