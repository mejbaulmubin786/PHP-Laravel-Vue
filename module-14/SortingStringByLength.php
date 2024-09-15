<?php
/*
Sorting String By Length

Problem Statement: Write a program to create a function that returns an array of strings sorted by length in ascending order.
Input: The program will take an integer N as the length of an array. Then it will take the string values of the array M[].
Output: The output will print the strings in sorted order.
Constraints: 0 ≤ |N| ≤ 100000, 0 ≤ |M[]| ≤ 10000
Example: Enter numbers
Input: 6
       abcde abc abcd abcdef ab a
Output: a ab abc abcd abcde abcdef
Notes: None
*/

function sortByLength($N, $M)
{
    // Sort the array by string length in ascending order
    usort($M, function ($a, $b) {
        return strlen($a) - strlen($b);
    });

    // Output the sorted array
    foreach ($M as $string) {
        echo $string . " ";
    }
}

// Input Handling
$N = intval(trim(fgets(STDIN))); // Reading the integer input
$M = explode(" ", trim(fgets(STDIN))); // Reading the array of strings

// Function call to sort and print strings by their length
sortByLength($N, $M);
