<?php

// Find Discount

// বাং
// Problem Statement
// Write a program to create a function that takes two arguments: the original price and the discount percentage as integers and returns the final price after the discount.

// Input
// The input consists of two integers: the original price and the discount.

// Output
// The output will print the final price after discount which will be a float number.

// Constraints
// N stands for any integer number.

// 0 ≤ |N| ≤ 100000
// Example:
// Enter numbers

// Input:
// 50 20
// Output:
// Price: 40.00
// Notes:
// Your answer should be rounded to two decimal places.

function findDiscount($originalPrice, $discount)
{
    // ডিসকাউন্টেড মূল্য বের করা
    $finalPrice = $originalPrice - ($originalPrice * ($discount / 100));

    // দুই দশমিক স্থানে রাউন্ড করা
    return number_format($finalPrice, 2, '.', '');
}

// ইউজারের ইনপুট নেওয়া
//echo "Enter numbers: ";
fscanf(STDIN, "%d %d", $originalPrice, $discount);

// ফাংশন কল করে আউটপুট দেখানো
echo "Price: " . findDiscount($originalPrice, $discount) . "\n";
