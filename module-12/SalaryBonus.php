<?php
/*
Salary Bonus

Problem Statement: Write a program to calculate the bonus of salary where bonus is the 10% of main salary. Although input is double type number, output will be an integer number.
Input: The input consists of a double type number.
Output: Output is the bonus of the salary which will be an integer number.
Constraints: 0 ≤ |S| ≤ 231 - 1

Example-1: Enter Salary
Input: 5000
Output: 500
Example-2: Enter Salary
Input: 2500.75
Output: 250
*/

# Write your PHP code from here
fscanf(STDIN, "%lf", $salary);
$bonusSalary = (int)($salary / 10);
echo $bonusSalary;
