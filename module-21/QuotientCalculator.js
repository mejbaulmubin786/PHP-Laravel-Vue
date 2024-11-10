/*
Quotient Calculator
Problem Statement

Write a program to find the quotient of two numbers (integer division).
Input

The input consists of two integers.
Output

Output will be the quotient which will be an integer.
Constraints

    -2 31 ≤ |S| ≤ 231 - 1

Example:

Enter two numbers
Input:

4 2

Output:

2
*/
function main (input) {
    /**
     * Write JavaScript code from here
     */
     numbers = input.split(" ");
    num1= parseInt(numbers[0]);
    num2= parseInt(numbers[1]);
    console.log(Math.floor(num1/num2));
}

let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});