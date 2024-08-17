<?php
/*
* Look For Ten (Easy)

Problem Statement: Write a program to create a function that takes two arguments. Both arguments are integers, a and b. Return true if one of them is 10 or if their sum is 10.
Input: The input consists of two integers.
Output: The output will print "True" if one of the input is 10 or their sum is 10. Otherwise, it will print "False".
Constraints: 0 ≤ |S| ≤ 10000

Example: Enter numbers
Input: 5 5
Output: True
Notes: None
*/
# Write your PHP code from here
fscanf(STDIN, "%d %d", $a, $b);

if ($a == 10 || $b == 10 || ($a + $b) == 10) {
    echo "True";
} else {
    echo "False";
}
