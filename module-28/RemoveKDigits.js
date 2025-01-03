/*
Remove K Digits
Problem Statement
Given a non-negative integer N represented as a string, remove K digits from the number so that the new number is the smallest possible.
Input
First line of the input contains an integer T, number of test cases. Next T lines contains a non-negative integer N and an integer K.N does not contain any leading zero.

Output
For each test case print the smallest possible integer after removing K digits from N. Output should not contain any leading zero.

Constraints
1 ≤ T ≤ 100
1 ≤ ∣N∣ ≤ 10000
1 ≤ K ≤ ∣N∣
Example 1:
Input:
2
1432219 3
10 1

Output:
1219
0
Example 2:
Input:
2
9999 4
123451 1
Output:
0
12341

 */

function main(input) {
  // Split the input into lines
  const lines = input.trim().split("\n");
  const t = parseInt(lines[0], 10); // Number of test cases
  const results = [];

  // Function to remove k digits
  function removeKDigits(num, k) {
    const stack = [];
    const length = num.length;

    for (let i = 0; i < length; i++) {
      const currentDigit = num[i];

      // Remove larger digits from the stack if we still need to remove digits
      while (
        k > 0 &&
        stack.length > 0 &&
        stack[stack.length - 1] > currentDigit
      ) {
        stack.pop();
        k--;
      }

      // Push current digit into the stack
      stack.push(currentDigit);
    }

    // If we still need to remove digits, remove from the end
    while (k > 0) {
      stack.pop();
      k--;
    }

    // Convert stack to a string and remove leading zeros
    const result = stack.join("").replace(/^0+/, "");

    // If the result is empty, return "0"
    return result === "" ? "0" : result;
  }

  // Process each test case
  for (let i = 1; i <= t; i++) {
    const [n, k] = lines[i].split(" ");
    results.push(removeKDigits(n, parseInt(k, 10)));
  }

  // Print the results
  console.log(results.join("\n"));
}

let input = "";
process.stdin.on("data", (chunk) => {
  input += chunk;
});

process.stdin.on("end", () => {
  main(input.trim());
});
