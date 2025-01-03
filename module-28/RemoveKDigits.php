<?php
/*
Remove K Digits
Problem Statement
Given a non-negative integer N represented as a string, remove K digits from the number so that the new number is the smallest possible.
Input
First line of the input contains an integer T, number of test cases. Next T lines contains a non-negative integer N and an integer K.N does not contain any leading zero.

Output
For each test case print the smallest possible integer after removing K digits from N. Output should not contain any leading zero.

Constraints
1 ≤ T ≤ 100
1 ≤ ∣N∣ ≤ 10000
1 ≤ K ≤ ∣N∣
Example 1:
Input:
2
1432219 3
10 1

Output:
1219
0
Example 2:
Input:
2
9999 4
123451 1
Output:
0
12341

 */

function removeKDigits($num, $k) {
    $stack = [];
    $length = strlen($num);

    for ($i = 0; $i < $length; $i++) {
        $currentDigit = $num[$i];

        // Remove larger digits from the stack if we still need to remove digits
        while ($k > 0 && !empty($stack) && end($stack) > $currentDigit) {
            array_pop($stack);
            $k--;
        }

        // Push current digit into the stack
        $stack[] = $currentDigit;
    }

    // If we still need to remove digits, remove from the end
    while ($k > 0) {
        array_pop($stack);
        $k--;
    }

    // Convert stack to a string and remove leading zeros
    $result = ltrim(implode('', $stack), '0');

    // If the result is empty, return "0"
    return $result === '' ? '0' : $result;
}

// Input processing
$t = intval(trim(fgets(STDIN))); // Number of test cases
for ($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', trim(fgets(STDIN)));
    echo removeKDigits($n, intval($k)) . PHP_EOL;
}
?>