<?php
/*
 * Concatenate Two String (Easy)

Problem Statement: Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".
Input: The input consists of two strings.
Output: The output will print a string.
Constraints: 0 ≤ |S| ≤ 10000

Example: Enter strings
Input: John Doe
Output: Doe, John
Notes: None
 */

# Write your PHP code from here
fscanf(STDIN, "%s %s", $firstName, $lastName);
function concatString($fname, $lname)
{
    return "{$lname} {$fname}";
}
echo concatString($firstName, $lastName);
