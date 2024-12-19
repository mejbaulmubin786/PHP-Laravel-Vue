/*
Remove Trailing Zeroes

Problem Statement: Write a program that takes in a number as a string S and returns the number without trailing zeros. Trailing zeroes before decimal point has importance , so they will not be removed. Only the trailing zeroes after decimal point which does not have any importance will be removed.
Input: The input consists of a string S.
Output: The output will print a number without trailing zeroes.
Constraints: 0 ≤ |S| ≤ 10000
Example: Enter number
Input: 505.4500
Output: 505.45
Notes: If there are only zeroes after decimal point then it will print the number without any decimal point. For example, 50.00 will be printed as 50.
*/


<?php
function removeTrailingZeroes($number) {
    // Convert the string to a float and then back to a string to remove unnecessary trailing zeroes
    if (strpos($number, '.') !== false) {
        $number = rtrim(rtrim($number, '0'), '.');
    }
    return $number;
}

// Input
$input = trim(fgets(STDIN));

// Process
$output = removeTrailingZeroes($input);

// Output
echo "$output\n";
?>
