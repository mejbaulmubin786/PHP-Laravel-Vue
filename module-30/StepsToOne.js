/*
Steps to One
Problem Statement: Given a positive integer n, write a program that returns the minimum number of steps to reach 1 by performing one of the following operations: Subtract 1 from it. If it is divisible by 2, divide it by 2. If it is divisible by 3, divide it by 3. For example- from 5 , subtracting 1 it will be 4, then it will be divided by 2 and become 2 then again it will be divided by 2 and become 1. Total 3 steps will be needed.
Input: The program will take an integer NN as input.
Output: The output will print the number of steps to become 1.
Constraints: 0 ≤ |N| ≤ 1000
Example: Enter number
Input: 5
Output: 3
Notes: None
*/

function main (input) {
    /**
     * Write JavaScript code from here
     */
    function minStepsToOne(n) {
    // Create an array to store the minimum steps for each number
    let dp = new Array(n + 1).fill(0);

    // Base case: dp[1] is 0 because it takes 0 steps to reduce 1 to 1
    for (let i = 2; i <= n; i++) {
        // Initialize dp[i] with the result of subtracting 1
        dp[i] = dp[i - 1] + 1;

        // If divisible by 2, check if dividing by 2 gives a better solution
        if (i % 2 === 0) {
            dp[i] = Math.min(dp[i], dp[i / 2] + 1);
        }

        // If divisible by 3, check if dividing by 3 gives a better solution
        if (i % 3 === 0) {
            dp[i] = Math.min(dp[i], dp[i / 3] + 1);
        }
    }

    return dp[n];
}

// Input
const N = parseInt(input);

// Check if input is valid
if (N >= 1 && N <= 1000) {
    // Output the minimum steps to reach 1
    console.log(minStepsToOne(N));
} else {
    console.log("Input must be a positive integer between 1 and 1000.");
}

}

let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});