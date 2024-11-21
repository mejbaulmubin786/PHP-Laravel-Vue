/**
 ** Two Point Distance (Easy)

Problem Statement: Write a program to calculate distance between two points.

Input: The input consists of four double numbers. the first two numbers indicate the co-ordinate of first point and the second two numbers indicate the co-ordinates of second point.
Output: Output is the distance of two points.
Constraints: The program should print the number with exactly two decimal points.

Example: Enter the co-ordinates of two points.
Input: 
    0 0
    2 2
Output: Distance: 2.83
 */

function main(input) {
	/**
	 * Write JavaScript code from here
	 */
	const data = input.split("\n");
	// console.log(data);
	const a = data[0].split(" ");
	const b = data[1].split(" ");
	// console.log(a,b)
	const x1 = Number(a[0]);
	const y1 = Number(a[1]);
	const x2 = Number(b[0]);
	const y2 = Number(b[1]);
	// console.log(x1,y1,x2,y2)
	const d = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
	console.log(`Distance: ${d.toFixed(2)}`);
}
// used for code-mama online editor
let input = "";
process.stdin.on("data", (chunk) => {
	input += chunk;
});

process.stdin.on("end", () => {
	main(input.trim());
});
