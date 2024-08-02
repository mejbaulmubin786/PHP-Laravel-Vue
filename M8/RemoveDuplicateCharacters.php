<?php
/* 
Remove Duplicate Characters 
Problem Statement: Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character. 

Input: The input consists of a string. 

Output: The output will be a string without any duplicate character. 

Constraints: 0 ≤ |S| ≤ 1000
Example: Enter string
Input: apples
Output: aples
Solved in PHP:
*/

$string = fgets(STDIN);                 // Taken string input
$array = str_split($string);            // String split into an array
$rmDuplicate = array_unique($array);    // removing duplicate  characters
$output = join($rmDuplicate);           // joined as a string
print($output);                         // print output
