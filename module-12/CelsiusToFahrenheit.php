<?php

/*
Celsius to Fahrenheit

Problem Statement: Write a program to convert temperature from Celsius to Fahrenheit.
Input: The input consists of a float number.
Output: Output will be the Fahrenheit value.
Constraints: The program should print the number with exactly two decimal points.

Example: Enter the temperature in Celsius
Input: 32
Output: The temperature in Fahrenheit is: 89.60
*/

# Write your PHP code from here
//fgets [line by line]
// fscanf []
$input = fgets(STDIN);
$f = (($input * 9 / 5) + 32);
printf("The temperature in Fahrenheit is: %.2f", $f);
