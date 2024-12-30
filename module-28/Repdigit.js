/*
Repdigit

Problem Statement: Write a program to check whether a number is Repdigit or not. A repdigit is a positive number composed out of the same digit.
Input: The input consists of a positive integer number N.
Output: The output will print either "true" or "false".
Constraints: 0 ≤ |N| ≤ 10000
Example: Enter number
Input: 55
Output: true
Notes: None
*/

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	const isRepdigit = (n) => {
		let a = n.toString();
		let b = false;
		if (n < 0) {
			return false;
		} else if (n == 0) {
			b = true;
		} else
			for (let i = 0; i < a.length - 1; i++) {
				if (a[i] === a[i + 1]) {
					b = true;
				}
			}
		return b;
	};
	console.log(isRepdigit(input));
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
