<?php

/*
2. Check Anagram
Problem Statement: You are given two strings A and B. Your task is check whether the string B is anagram of string A or not. An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.

Input: The input consists of two strings A and B in two lines containing only lowercase English letters.

Output: In output print "YES" if string B is anagram of string A or "NO" otherwise. Print without quotation mark.

Constraints: 1 ≤ ∣A∣,∣B∣ ≤ 10000
strings contains only lowercase (a−z) English letters.

Example 1:
    Input: abcd , dbac
    Output: YES

Example 2:
    Input: abcd , aabc
    Output: NO

    */

#Function checking A and B is anagram or not.
function anagram($A, $B)
{
    if (strlen($A) != strlen($B)) {
        return "No";
    }

    $arrA = str_split($A);
    $arrB = str_split($B);
    sort($arrA);
    sort($arrB);
    if ($arrA === $arrB) {
        return "YES";
    } else {
        return "NO";
    }
}

#Taken string input
$A = trim(fgets(STDIN));
$B = trim(fgets(STDIN));

#Print output
echo anagram($A, $B);
