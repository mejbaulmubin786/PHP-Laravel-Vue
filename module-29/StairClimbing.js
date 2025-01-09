/*
Stair Climbing
Problem Statement
Write a program to count number of ways a person can climb N stairs when a person can climb either 1 stair or 2 stairs at a time.The program should count the number of ways a person can reach the top.

Input
The program will take an integer N as input

Output
The output will be an integer.

Constraints
0 ≤ N ≤ 1000
Example:
Enter number

Input: 5
Output: 8
 */

function main(input) {
  /**
   * Write JavaScript code from here
   */

  function countWays(n) {
    // Base case: if there are 0 or 1 stairs, there is only 1 way to climb
    if (n === 0) {
      return 1;
    }
    if (n === 1) {
      return 1;
    }

    // Initialize an array to store the number of ways for each stair
    let dp = Array(n + 1).fill(0);

    // There is 1 way to climb 0 stairs (do nothing) and 1 way to climb 1 stair
    dp[0] = 1;
    dp[1] = 1;

    // Fill the dp array for all stairs from 2 to N
    for (let i = 2; i <= n; i++) {
      dp[i] = dp[i - 1] + dp[i - 2];
    }

    // The result is stored in dp[N]
    return dp[n];
  }

  // Parse the input and calculate the result
  const n = parseInt(input);
  console.log(countWays(n));
}

let input = "";
process.stdin.on("data", (chunk) => {
  input += chunk;
});

process.stdin.on("end", () => {
  main(input.trim());
});
