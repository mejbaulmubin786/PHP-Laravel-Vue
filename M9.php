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
