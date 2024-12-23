/**
 * Gamble with Profit

Problem Statement: Write a program that takes three arguments prob, prize, pay and returns true if prob * prize > pay; otherwise return false.
Input: The input consists of one float F and two integer N, M numbers
Output: The output will print either "true" or "false"
Constraints: 0 ≤ |F| ≤ 1, 0 ≤ |N| ≤ 104, 0 ≤ |M| ≤ 104

Example: Enter numbers
Input: 0.2 50 9
Output: true
Notes: A profitable gamble is a game that yields a positive net profit, where net profit is calculated in the following manner: net_outcome = probability_of_winning * prize - cost_of_playing.
 */
function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	const data = input.split(" ");
	const prob = parseFloat(data[0]);
	const prize = parseFloat(data[1]);
	const pay = parseFloat(data[2]);
	if (prob * prize > pay) {
		console.log(true);
	} else {
		console.log(false);
	}
}

let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
