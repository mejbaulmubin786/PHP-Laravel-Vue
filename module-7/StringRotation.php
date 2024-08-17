<?php

/*
2. String Rotation (Medium)

Problem Statement: Write a program to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.

Input: The input consists of two strings S and T.
Output: The output will print either "True" or "False".
Constraints: 0 ≤ |S| ≤ 10000, 0 ≤ |T| ≤ 10000

Example: Enter strings
Input: waterbottle erbottlewat
Output: True
*/

# Write your PHP code from here
fscanf(STDIN, "%s %s", $S, $T);

function rotation_string($S, $T)
{
    // if both strings are not same length then stop
    if (strlen($S) != strlen($T))
        echo "False";

    // concatenate $string1 to itself, if both
    // strings are of same length
    if (strlen($S) == strlen($T))
        $S = $S . $S;

    if (strpos($S, $T) > 0)
        echo "True";
    else
        echo "False";
}

rotation_string($S, $T);
