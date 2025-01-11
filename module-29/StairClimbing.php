<?
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
?>

<?php

function countWays($n) {
    // Base case: if there are 0 or 1 stairs, there is only 1 way to climb
    if ($n == 0) {
        return 1;
    }
    if ($n == 1) {
        return 1;
    }

    // Initialize an array to store the number of ways for each stair
    $dp = array_fill(0, $n + 1, 0);

    // There is 1 way to climb 0 stairs (do nothing) and 1 way to climb 1 stair
    $dp[0] = 1;
    $dp[1] = 1;

    // Fill the dp array for all stairs from 2 to N
    for ($i = 2; $i <= $n; $i++) {
        // A person can reach the i-th stair by either:
        // 1. Coming from (i-1)-th stair (1 step), or
        // 2. Coming from (i-2)-th stair (2 steps)
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    // The result is stored in dp[N]
    return $dp[$n];
}

// Take input
$n = (int) trim(fgets(STDIN));

// Output the number of ways to climb N stairs
echo countWays($n) . "\n";
?>
