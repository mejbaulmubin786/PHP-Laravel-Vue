/*
String Permutation
Problem Statement: Write a program to implement a function to generate all possible permutations of characters in a given string. For example, if the input is "abc," the output should include "abc," "acb," "bac," "bca," "cab," and "cba." The output answers will be in sorted order.
Input: The program will take a string as input.
Output: The output will be the possible strings after permutation.
Constraints: 0 ≤ |S| ≤ 100
Example: Enter string
Input: abc
Output:abc acb bac bca cab cba
Notes: None
 */

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	var arr = [];
	function permute(str, l, r) {
		if (l == r) {
			arr.push(str);
			//console.log(str+ " ");
		} else {
			for (let i = l; i <= r; i++) {
				str = swap(str, l, i);
				permute(str, l + 1, r);
				str = swap(str, l, i);
			}
		}
	}

	function swap(a, i, j) {
		let temp;
		let charArray = a.split("");
		temp = charArray[i];
		charArray[i] = charArray[j];
		charArray[j] = temp;
		return charArray.join("");
	}

	let str = input;
	let n = str.length;
	permute(str, 0, n - 1);

	console.log(...arr.sort());
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
