<?php
/*
Three Number Average

Problem Statement: Write a program that finds the average of three numbers entered by the user.
Input: The input consists of 3 float.
Output: Output will be a float number.
Constraints: 1.2E-38 ≤ |S| ≤ 3.4E+38
The program should print the number with exactly two decimal points.

Example: Enter three numbers
Input: 10 20 30
Output: Average: 20.00
*/


    # Write your PHP code from here
    fscanf(STDIN, "%f %f %f", $num1, $num2, $num3);
    $avg = ($num1 + $num2 + $num3)/3;
    printf("Average: %.2f", $avg);
?>