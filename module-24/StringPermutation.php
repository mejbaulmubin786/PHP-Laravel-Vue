<?php
function stringPermutations($str) {
    $results = [];

    if (strlen($str) == 1) {
        return [$str];
    }

    for ($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i];

        $remaining = substr($str, 0, $i) . substr($str, $i + 1);

        $permutations = stringPermutations($remaining);

        foreach ($permutations as $perm) {
            $results[] = $char . $perm;
        }
    }

    return $results;
}

// Main execution

$input = trim(fgets(STDIN)); 

if ($input === "") {
    echo "Please enter a valid string.\n";
    exit;
}

$permutations = stringPermutations($input);


sort($permutations);

echo implode(" ", $permutations) . "\n";
?>