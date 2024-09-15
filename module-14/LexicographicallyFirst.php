<?php

/*
Lexicographically First

Problem Statement: Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.
Input: The program will take a string S as input.
Output: The output will print a string.
Constraints: 0 ≤ |S| ≤ 100000
Example: Enter string
Input: hello
Output: ehllo
Notes: None
*/
function lexicographicallyFirst($S)
{
    // Convert the string into an array of characters
    $chars = str_split($S);

    // Sort the array lexicographically (alphabetically)
    sort($chars);

    // Convert the sorted array back to a string
    $sortedString = implode("", $chars);

    // Output the lexicographically first string
    echo $sortedString;
}

// Input Handling
$S = trim(fgets(STDIN)); // Reading the string input

// Function call to get the lexicographically first rearrangement
lexicographicallyFirst($S);
