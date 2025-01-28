/*
Number to String

বাং
Problem Statement
Write a program to convert number into string. The program will print every digit of the number as a string.

Input
The program will take an integer 
N
N as input.

Output
The output will print strings.

Constraints
0 ≤ N ≤ 1000
Example:
Enter Number

Input:
203
Output:
two zero three
Notes:
None
*/

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	// Function to convert a digit to its string representation
	function digitToString(digit) {
		const digitMap = {
			0: "zero",
			1: "one",
			2: "two",
			3: "three",
			4: "four",
			5: "five",
			6: "six",
			7: "seven",
			8: "eight",
			9: "nine",
		};
		return digitMap[digit];
	}

	const data = input;

	// Main program
	function numberToString(data) {
		// Take input from the user
		const N = data;

		// Check if input is within the constraints
		if (!/^[0-9]+$/.test(N) || parseInt(N) < 0) {
			console.log("Invalid input. Please enter a number between 0 and 1000.");
			return;
		}

		// Convert each digit to string and join them with spaces
		const result = Array.from(N).map(digitToString).join(" ");

		// Print the result
		console.log(result);
	}

	// Call the function
	numberToString(data);
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
