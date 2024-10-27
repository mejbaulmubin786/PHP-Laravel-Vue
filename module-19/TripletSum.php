<?php
/*
Triplet Sum
Problem Statement: Write a program where you will be given an array arr[] of size N and an integer P. Find the triplet in the array which sums up to the given integer P.
Input: The program will take an integer NN as the size of an array. Then it will take the integer values of the array arr[]arr[]. Finally, it will take the target value PP.
Output: The output will print the triplet numbers which will generate the sum.
Constraints: 0 ≤ N ≤ 100000, 0 ≤ arr[] ≤ 100000, 0 ≤ P ≤ 100000
Example: Enter numbers
Input:  6
        12 3 4 1 6 9
        24

Output: 3 9 12

Notes: None
*/


function findTriplet($arr, $N, $P) {
    // Sort the array
    sort($arr);

    // Iterate over the array
    for ($i = 0; $i < $N - 2; $i++) {
        // Use two pointers
        $left = $i + 1;
        $right = $N - 1;

        while ($left < $right) {
            $current_sum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($current_sum == $P) {
                // Return the triplet as an array
                return [$arr[$i], $arr[$left], $arr[$right]];
            } elseif ($current_sum < $P) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    // If no triplet found
    return null;
}

// Input
//echo "Enter the size of the array: ";
$N = intval(trim(fgets(STDIN)));

//echo "Enter the elements of the array: ";
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

//echo "Enter the target value P: ";
$P = intval(trim(fgets(STDIN)));

// Find and print the result
$result = findTriplet($arr, $N, $P);

if ($result) {
    echo implode(" ", $result) . "\n";
} else {
    echo "No triplet found\n";
}
?>
