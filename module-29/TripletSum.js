// Module -19
/*
Triplet Sum

Problem Statement
Write a program where you will be given an array arr[] of size N and an integer P. Find the triplet in the array which sums up to the given integer P.

Input
The program will take an integer N as the size of an array. Then it will take the integer values of the array arr[]. Finally, it will take the target value P.

Output
The output will print the triplet numbers which will generate the sum.

Constraints
0 ≤ N ≤ 100000
0 ≤ arr[] ≤ 100000
0 ≤ P ≤ 100000
Example:
Enter numbers

Input:
6
12 3 4 1 6 9
24
Output:
3 9 12
*/

function main(input) {
  function findTriplet(arr, P) {
    // Sort the array to use two-pointer technique
    arr.sort((a, b) => a - b);

    // Iterate through the array to find the triplet
    for (let i = 0; i < arr.length - 2; i++) {
      let left = i + 1;
      let right = arr.length - 1;

      // Check if there exists a pair that sums up with arr[i] to P
      while (left < right) {
        const sum = arr[i] + arr[left] + arr[right];
        if (sum === P) {
          console.log(arr[i], arr[left], arr[right]);
          return;
        } else if (sum < P) {
          left++;
        } else {
          right--;
        }
      }
    }

    // If no triplet is found
    console.log("No triplet found");
  }

  // Parse the input
  const lines = input.split("\n");
  const N = parseInt(lines[0].trim());
  const arr = lines[1].trim().split(" ").map(Number);
  const P = parseInt(lines[2].trim());

  // Call the function to find and print the triplet
  findTriplet(arr, P);
}

let input = "";
process.stdin.on("data", (chunk) => {
  input += chunk;
});

process.stdin.on("end", () => {
  main(input.trim());
});
