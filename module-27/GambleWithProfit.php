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

<?php
// Function to check if the gamble is profitable
function isProfitableGamble($prob, $prize, $pay) {
    // Calculate net profit condition
    return ($prob * $prize > $pay);
}

// Reading input from the user

$input = trim(fgets(STDIN)); // Get input from the standard input

// Splitting the input into respective values
list($prob, $prize, $pay) = explode(' ', $input);

// Converting input values to appropriate types
$prob = (float)$prob;
$prize = (int)$prize;
$pay = (int)$pay;

// Check if the gamble is profitable
$result = isProfitableGamble($prob, $prize, $pay);

// Output the result
echo $result ? "true\n" : "false\n";
?>