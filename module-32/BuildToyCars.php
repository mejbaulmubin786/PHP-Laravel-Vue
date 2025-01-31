<?php

/*
Build Toy Cars

বাং
Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

Input
The input consists of three integers: number of wheels, car bodies, figures.

Output
The output will print the number of cars.

Constraints
N stands for any integer number.

0 ≤ |N| ≤ 100000
Example:
Enter numbers

Input:
43 15 87
Output:
10
Notes:
None
*/

function buildToyCars($wheels, $bodies, $figures)
{
    // প্রতিটি টয় কার বানানোর জন্য প্রয়োজন: 4 চাকা, 1 বডি, 2 ফিগার
    return min(intval($wheels / 4), intval($bodies), intval($figures / 2));
}

// ইউজারের ইনপুট নেওয়া
//echo "Enter numbers: ";
fscanf(STDIN, "%d %d %d", $wheels, $bodies, $figures);

// ফাংশন কল করে আউটপুট দেখানো
echo buildToyCars($wheels, $bodies, $figures) . "\n";
