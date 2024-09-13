<?php
/*
Calculate Square Root

Problem Statement: Write a program to approximate the square root of a non-negative integer using binary search. Your function should return an integer representing the floor of the square root. For example, for 6 it will print 2.
Input: The input consists of an integers N.
Output: The output will print the square root integer value of the input.
Constraints: 0 ≤ |N| ≤ 10000
Example: Enter number
Input: 6
Output: 2
Notes: None 
*/

# Write your PHP code from here
function sqrtBinarySearch($n)
{
    if ($n == 0 || $n == 1) {
        return $n; // Base case
    }

    $left = 0;
    $right = $n;
    $result = 0;

    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);

        // Check if mid*mid is exactly equal to n
        if ($mid * $mid == $n) {
            return $mid;
        }

        // If mid*mid is less than n, move to the right half
        if ($mid * $mid < $n) {
            $left = $mid + 1;
            $result = $mid; // Store the floor value
        } else {
            // If mid*mid is greater than n, move to the left half
            $right = $mid - 1;
        }
    }

    return $result; // Return the floor of the square root
}

// Input
fscanf(STDIN, "%d", $N);

// Find and print the floor square root
echo sqrtBinarySearch($N) . "\n";
