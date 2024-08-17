<?php
/* 
1. Remove Duplicate Characters 
Problem Statement: Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character. 

Input: The input consists of a string. 
Output: The output will be a string without any duplicate character. 
Constraints: 0 ≤ |S| ≤ 1000

Example: Enter string
Input: apples
Output: aples
Solved in PHP:
*/

# Taken string input
$string = fgets(STDIN);
# String split into an array               
$array = str_split($string);
# removing duplicate  characters        
$rmDuplicate = array_unique($array);
# joined as a string 
$output = join($rmDuplicate);
# print output       
print($output);
