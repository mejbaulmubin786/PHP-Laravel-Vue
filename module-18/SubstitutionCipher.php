<?php
/*
Substitution Cipher
Problem Statement: A substitution cipher is a method of encryption where each letter in the plaintext is replaced by another letter according to a fixed system. One of the simplest substitution ciphers is the Caesar cipher, where each letter in the plaintext is shifted a certain number of places down or up the alphabet. You will be given a plaintext and a shift number. You will have to have to shift each letter of the plaintext according to the number.
Input: The program will take a string SS and an integer NN
Output: The output will print a string shifted by a particular number.
Constraints: 0 ≤ |N| ≤ 10000 , 0 ≤ |S| ≤ 10000
Example: Enter string and number
Input: abcd 1
Output: bcde
Notes: None
*/

function caesarCipher($s, $n) {
    $result = "";
    $n = $n % 26; // Optimize the shift value to avoid unnecessary large shifts
    
    // Iterate over each character in the string
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        
        // Check if the character is uppercase
        if (ctype_upper($char)) {
            $shiftedChar = chr(((ord($char) - ord('A') + $n) % 26) + ord('A'));
            $result .= $shiftedChar;
        }
        // Check if the character is lowercase
        elseif (ctype_lower($char)) {
            $shiftedChar = chr(((ord($char) - ord('a') + $n) % 26) + ord('a'));
            $result .= $shiftedChar;
        }
        // If not a letter, don't shift it
        else {
            $result .= $char;
        }
    }
    
    return $result;
}

// Input from user
//echo "Enter string and number:\n";
$input = trim(fgets(STDIN));

// Split the input into string and number
list($s, $n) = explode(" ", $input);

// Convert shift to integer
$n = intval($n);

// Output the shifted string
echo caesarCipher($s, $n) . "\n";