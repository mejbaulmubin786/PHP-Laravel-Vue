<?php

/*
 * Second to Hour:Minute (Easy)

Problem Statement: Write a program which will take seconds as input and output into hour:minute.
Input: The input consists of a integer.
Output: The output will print in the form hour:minute. For example if it takes 130 as input then it will print 0:2.
Constraints: 0 ≤ |S| ≤ 10000

Example: Enter number
Input: 130
Output: 0:2
Notes: None
 */

# Write your PHP code from here

fscanf(STDIN, "%d", $second);

$minute = $second / 60;
$hour = $minute / 60;
if ($hour == 0) {
    echo (int)$hour . ":" . (int)$minute;
} else {
    $restMinute = $minute % 60;
    echo (int)$hour . ":" . (int)$restMinute;
}
