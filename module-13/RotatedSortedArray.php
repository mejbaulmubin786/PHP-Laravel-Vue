<?php
/*
Rotated Sorted Array

Problem Statement: Write a program to find the index of a target value in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.
Input: The program will take an integer N as the size of a rotated sorted array. Then it will take the integer values of the array 
M[]. Finally, it will take the target value P
Output: The output will print either the index of the target element or "Element not found" if the element is not found.
Constraints:
0 ≤ |N| ≤ 100000
0 ≤ |M[]| ≤ 100000
0 ≤ |P| ≤ 100000
Example-1: Enter numbers
Input:
    7
    4 5 6 7 0 1 2
    0
Output: 4

Example-2: Enter numbers
Input:
    7
    4 5 6 7 0 1 2
    8
Output: Element not found
Notes: There will be no repeated elements.
*/
# Write your PHP code from here

// Function to search for a target value in a rotated sorted array
function searchRotatedSortedArray($arr, $target)
{
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);

        // Check if the middle element is the target
        if ($arr[$mid] == $target) {
            return $mid;
        }

        // If the left part is sorted
        if ($arr[$left] <= $arr[$mid]) {
            if ($arr[$left] <= $target && $target < $arr[$mid]) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        // Otherwise, the right part must be sorted
        else {
            if ($arr[$mid] < $target && $target <= $arr[$right]) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
    }

    return -1;
}

// Input
fscanf(STDIN, "%d", $N);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
fscanf(STDIN, "%d", $P);

// Find the target
$index = searchRotatedSortedArray($arr, $P);

// Output the result
if ($index != -1) {
    echo $index . "\n";
} else {
    echo "Element not found\n";
}
