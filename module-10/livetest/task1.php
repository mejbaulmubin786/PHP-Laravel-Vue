<?php

// Given array of random numbers

$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];


// Your Code goes here

function even($item)
{
    if ($item % 2 == 0 && $item > 50) {
        return $item;
    }
}
$evenNumbers = array_filter($randomNumbers, "even",);

$multiplyEvenNumbers = array_map(function ($item) {
    return $item * 2;
}, $evenNumbers);

print_r($multiplyEvenNumbers);
