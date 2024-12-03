/*
Longest Substring Without Repeating Character

Problem Statement: Write a program to find the length of the longest substring in a given string without repeating characters. For example, in the string "abcabcbb," the longest substring without repeating characters is "abc," which has a length of 3.
Input: The program will take a string as input.
Output: The output will be the length of the longest substring which will be an integer.
Constraints: 0 ≤ |S| ≤ 1000
Example: Enter string
Input: abcabcbb
Output: 3
Notes: None
 */

function main(input) {
	/**
	 * Write JavaScript code from here
	 */

	function longestUniqueSubstr(s) {
		let n = s.length;
		let res = 0;

		for (let i = 0; i < n; i++) {
			// Initializing all characters as not visited
			let visited = new Array(256).fill(false);

			for (let j = i; j < n; j++) {
				// If current character is visited
				// Break the loop
				if (visited[s.charCodeAt(j)] === true) {
					break;
				} else {
					// Else update the result if this window is larger,
					// and mark current character as visited.
					res = Math.max(res, j - i + 1);
					visited[s.charCodeAt(j)] = true;
				}
			}
		}
		return res;
	}

	console.log(longestUniqueSubstr(input));
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
