<?php
/*
1. Substring Occurrences Counting (Easy)

Problem Statement
Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

Input: The input consists of two strings S and T.
Output: The output will print the number of occurrences of a substring which will be an integer.
Constraints: 0 ≤ |S| ≤ 10000, 0 ≤ |T| ≤ 10000

Example: Enter strings
Input: abababab ab
Output: 4
*/

# Write your PHP code from here
function countFreq($pat, $txt)
{
    $M = strlen($pat);
    $N = strlen($txt);
    $res = 0;

    /* A loop to slide pat[] one by one */
    for ($i = 0; $i <= $N - $M; $i++) {
        /* For current index i, check for 
        pattern match */
        for ($j = 0; $j < $M; $j++)
            if ($txt[$i + $j] != $pat[$j])
                break;

        // if pat[0...M-1] = txt[i, i+1, ...i+M-1]
        if ($j == $M) {
            $res++;
            $j = 0;
        }
    }
    return $res;
}

fscanf(STDIN, "%s %s", $text, $patt);
echo countFreq($patt, $text);


/*
2. String Rotation (Medium)

Problem Statement: Write a program to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.

Input: The input consists of two strings S and T.
Output: The output will print either "True" or "False".
Constraints: 0 ≤ |S| ≤ 10000, 0 ≤ |T| ≤ 10000

Example: Enter strings
Input: waterbottle erbottlewat
Output: True
*/

# Write your PHP code from here
fscanf(STDIN, "%s %s", $S, $T);

function rotation_string($S, $T)
{
    // if both strings are not same length then stop
    if (strlen($S) != strlen($T))
        echo "False";

    // concatenate $string1 to itself, if both
    // strings are of same length
    if (strlen($S) == strlen($T))
        $S = $S . $S;

    if (strpos($S, $T) > 0)
        echo "True";
    else
        echo "False";
}

rotation_string($S, $T);
