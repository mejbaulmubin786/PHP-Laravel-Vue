/**
 * Frame Per Second

Problem Statement: Write a program that returns the number of frames shown in a given number of minutes for a certain FPS. FPS stands for "frames per second" and it's the number of frames a computer screen shows every second.
Input: The input consists of two integer number: minute and fps.
Output: The output will print an integers.
Constraints: 0 ≤ |S| ≤ 104

Example: Enter numbers
Input: 10 25
Output: 15000
Notes: None
 */

<?php
// Function to calculate total frames
function calculateFrames($minutes, $fps) {
    // Calculate the total number of frames
    return $minutes * 60 * $fps;
}

// Reading input from the user

$input = trim(fgets(STDIN)); // Get input from the standard input

// Splitting the input into respective values
list($minutes, $fps) = explode(' ', $input);

// Converting input values to integers
$minutes = (int)$minutes;
$fps = (int)$fps;

// Calculate total frames
$totalFrames = calculateFrames($minutes, $fps);

// Output the result
echo "$totalFrames\n";
?>
