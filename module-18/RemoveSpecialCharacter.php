<?php

/*
Remove Special Character
Problem Statement: Write a program to Create a function that takes a string, removes all "special" characters (e.g. ., !, @, #, $, %, ^, &, , *, (, )) and returns the new string.
Input: The program will take a string SS
Output: The output will print a string without any special character.
Constraints: 0 ≤ |S| ≤ 1000 , Input special characters will be from (., !, @, #, $, %, ^, &, , *, (, ))
Example: Enter string
Input: ab!cd
Output: abcd 
Notes: None
*/

function removeSpecialCharacters($str) {
    // List of special characters to be removed
    $specialChars = ['.', '!', '@', '#', '$', '%', '^','/', '&', ',', '*', '(', ')'];
    
    // Remove all special characters by replacing them with an empty string
    $result = str_replace($specialChars, '', $str);
    
    return $result;
}

// Input from user

$input = trim(fgets(STDIN));

// Output the result after removing special characters
echo removeSpecialCharacters($input) . "\n";
?>
