/**
 1. Leap Year Problem (Easy)

Problem Statement: Write a program that checks if a year entered by the user is a leap year or not.
Input: The input consists of an integer.
Output: Output will print the type of the year whether it is leap year or not.
Constraints: 0 ≤ |S| ≤ 2^31 - 1

Example-1: Enter a year
Input:1900
Output: 1900 is not a leap year.

Example-2: Enter a year
Input: 2020
Output: 2020 is a leap year.    

*/

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	const a = Number(input);
	if ((a % 4 == 0 && a % 100 != 0) || a % 400 == 0) {
		console.log(`${a} is a leap year.`);
	} else {
		console.log(`${a} is not a leap year.`);
	}
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
