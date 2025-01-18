<?php
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
?>
<?php

function minStepsToOne($n) {
    // Array to store the minimum steps for each number up to n
    $dp    = array_fill(0, $n + 1, PHP_INT_MAX);
    $dp[1] = 0; // Base case: 1 requires 0 steps to reach 1

    // Fill the dp array
    for ($i = 2; $i <= $n; $i++) {
        // Subtract 1
        $dp[$i] = $dp[$i - 1] + 1;

        // Divide by 2 if divisible
        if ($i % 2 == 0) {
            $dp[$i] = min($dp[$i], $dp[$i / 2] + 1);
        }

        // Divide by 3 if divisible
        if ($i % 3 == 0) {
            $dp[$i] = min($dp[$i], $dp[$i / 3] + 1);
        }
    }

    return $dp[$n];
}

// Take input from the user

$n = intval(trim(fgets(STDIN)));

if ($n > 0) {
    // Call the function and print the result
    echo minStepsToOne($n);
} else {
    echo "Invalid input. Please enter a positive integer.";
}

?>