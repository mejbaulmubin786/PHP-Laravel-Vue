/**
 3. Positive Negative (Easy)

Problem Statement: Write a program that checks if a number entered by the user is positive, negative, or zero.

Input: The input consists of a integer.
Output: Output the type of number.
Constraints: -2^31 ≤ |S| ≤ 2^31 - 1

Example-1: Enter a number
Input: 5
Output: 5 is a positive number.

Example-2: Enter a number
Input: -3
Output: -3 is a negative number.

Example-3: Enter a number
Input: 0
Output: The number is zero.    
 */

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	if (input > 0) {
		console.log(`${input} is a positive number.`);
	} else if (input == 0) {
		console.log(`The number is zero.`);
	} else {
		console.log(`${input} is a negative number.`);
	}
}
let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
