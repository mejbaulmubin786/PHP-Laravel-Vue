<?php
function longestUniqueSubstring($str) {
    $charMap = []; 
    $maxLength = 0; 
    $start = 0; 

    for ($end = 0; $end < strlen($str); $end++) {
        $char = $str[$end];

        
        if (isset($charMap[$char]) && $charMap[$char] >= $start) {
            $start = $charMap[$char] + 1;
        }

        
        $charMap[$char] = $end;

        $maxLength = max($maxLength, $end - $start + 1);
    }

    return $maxLength;
}

$input = trim(fgets(STDIN)); 

if ($input === "") {
    echo "Please enter a valid string.\n";
    exit;
}

$length = longestUniqueSubstring($input);

echo "$length\n";
?>
