<?php
/*
Lexicographically At The End

Problem Statement: Write a program to create a function that returns the lexicographically last rearrangements of a lowercase string.
Input: The program will take a string S as input.
Output: The output will print a string.
Constraints: 0 ≤ |S| ≤ 100000
Example: Enter string
Input: hello
Output: ollhe
Notes: None
*/
function lexicographicallyLast($S)
{
    // Convert the string into an array of characters
    $chars = str_split($S);

    // Sort the array in descending order (reverse lexicographical order)
    rsort($chars);

    // Convert the sorted array back to a string
    $sortedString = implode("", $chars);

    // Output the lexicographically last string
    echo $sortedString;
}

// Input Handling
$S = trim(fgets(STDIN)); // Reading the string input

// Function call to get the lexicographically last rearrangement
lexicographicallyLast($S);
