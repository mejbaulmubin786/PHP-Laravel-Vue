/**
 4. Game of Swap

Problem Statement: Write a program that swaps the values of two variables.
Input: The input consists of two integers.
Output: Output consists of two integers.
Constraints:-2^31 ≤ |S| ≤ 2^31 - 1

Example: Enter two numbers
Input: 10 20
Output: 
    Before swapping: num1 = 10, num2 = 20
    After swapping: num1 = 20, num2 = 10
 */

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	let data = input.split(" ");
	let num1 = data[0];
	let num2 = data[1];
	console.log(`Before swapping: num1 = ${num1}, num2 = ${num2}`);
	let temp = num1;
	num1 = num2;
	num2 = temp;

	console.log(`After swapping: num1 = ${num1}, num2 = ${num2}`);
}
let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
