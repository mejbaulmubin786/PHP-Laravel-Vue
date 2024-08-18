<?php

function reverseStr($str)
{
    $reversed = strrev($str);
    return $reversed;
}

function vowelCount($str)
{
    $strSplit = str_split($str);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach ($strSplit as $letter) {
        if (in_array($letter, $vowels)) {
            $count++;
        }
    }
    return $count;
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    $reversed = reverseStr($str);
    $vowels = vowelCount($str);
    echo "Original string: $str, Vowel Count: $vowels, Reversed string: $reversed\n\n";
}
