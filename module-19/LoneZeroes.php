<?php
/*
Lone Zeroes
Problem Statement: Write a program to create a function which counts how many lone 0s appear in a given number. Lone means the number doesn't appear twice or more in a row.Previous and next numbers are not zeroes. For example - countLoneZeroes(10101) ➞ 2
Input: The program will take an integer NN as input
Output: The output will print the number of lone 0's in the integer.
Constraints: 0 ≤ N ≤ 100000
Example: Enter number
Input: 10101
Output: 2
Notes: None
*/

    # Write your PHP code from here
 function countLoneZeroes($N) {
    // Process $N as a string to handle large numbers consistently
    $str = (string) $N;
    $length = strlen($str);
    $loneZeroes = 0;

    // Traverse through each character in the string
    for ($i = 0; $i < $length; $i++) {
        // Check if the current character is '0' and is "lone"
        if ($str[$i] === '0' &&
            ($i == 0 || $str[$i - 1] !== '0') &&    // No zero before
            ($i == $length - 1 || $str[$i + 1] !== '0')) { // No zero after

            $loneZeroes++;
        }
    }

    return $loneZeroes;
}

// Input processing
$N = trim(fgets(STDIN));

// Call the function and print the result
echo countLoneZeroes($N);
?>