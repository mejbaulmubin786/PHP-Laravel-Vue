<?php
/*
Greater in Three

Problem Statement: Write a program that finds the maximum of three numbers entered by the user.
Input: The input consists of 3 integers.
Output: Output the maximum
Constraints: -2 31 ≤ |S| ≤ 231 - 1

Example: Enter three numbers
Input: 10 20 30
Output: 30
*/

# Write your PHP code from here
fscanf(STDIN, "%d %d %d", $num1, $num2, $num3);
$max = $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
echo $max;
