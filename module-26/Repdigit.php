/*
Repdigit

Problem Statement: Write a program to check whether a number is Repdigit or not. A repdigit is a positive number composed out of the same digit.
Input: The input consists of a positive integer number N.
Output: The output will print either "true" or "false".
Constraints: 0 ≤ |N| ≤ 10000
Example: Enter number
Input: 55
Output: true
Notes: None
*/


<?php
function isRepdigit($number) {
    // Convert the number to a string
    $numberStr = strval($number);

    // Get the first character
    $firstChar = $numberStr[0];

    // Check if all characters are the same as the first character
    foreach (str_split($numberStr) as $char) {
        if ($char !== $firstChar) {
            return "false";
        }
    }
    return "true";
}

// Input
$input = trim(fgets(STDIN));

// Process and Output
echo isRepdigit($input) . "\n";
?>
