<?
/*
Zero or One
Problem Statement: A number from 0 to 9 will be presented as an word in lower case english letter. For example- three. The program will take it as input. Print 0 if the remainder is 0 while the number is divided by 2, otherwise print 1 if the remainder is 1.
Input: The program will take a string SS as input.
Output: The output will print either 0 0r 1.
Constraints: 0 ≤ |S| ≤ 9
Example: Enter string
Input: three
Output: 1
Notes: No number greater than 9 will be given as input
*/
?>


<?php

    // Define a mapping of number words to their numeric equivalents
    $numberWords = [
        "zero"  => 0,
        "one"   => 1,
        "two"   => 2,
        "three" => 3,
        "four"  => 4,
        "five"  => 5,
        "six"   => 6,
        "seven" => 7,
        "eight" => 8,
        "nine"  => 9,
    ];

    // Take input from the user

    $input = trim(fgets(STDIN));

    // Check if the input exists in the mapping
    if (array_key_exists($input, $numberWords)) {
        $number = $numberWords[$input]; // Get the numeric value
        echo $number % 2;               // Output 0 if even, 1 if odd
    } else {
        echo "Invalid input.";
    }

?>