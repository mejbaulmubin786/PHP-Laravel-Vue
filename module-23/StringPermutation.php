<?php
// একটি স্ট্রিং-এর সমস্ত সম্ভবপর permutation তৈরি করে এবং সেগুলোকে লেক্সিকোগ্রাফিক (sorted) অর্ডারে প্রিন্ট করে।
function stringPermutations($str) {
    $results = [];

    // এখানে strlen($str) == 1 মানে যদি স্ট্রিংটির দৈর্ঘ্য 1 হয় (অর্থাৎ, শুধু একটি অক্ষর থাকে), তখন permutation কেবল সেই অক্ষরটিই হবে।
    if (strlen($str) == 1) {
        return [$str];
    }

    for ($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i];

        // substr($str, 0, $i) দিয়ে স্ট্রিংয়ের $i এর আগের অংশ নেয় এবং substr($str, $i + 1) $i এর পরের অংশ নেয়।
        $remaining = substr($str, 0, $i) . substr($str, $i + 1); // দুটো অংশ যোগ করে $remaining তৈরি করা হয়।

        // বাকি স্ট্রিং ($remaining) এর permutation বের করতে ফাংশনটিকে আবার ডাকা হয়েছে।
        $permutations = stringPermutations($remaining);

        foreach ($permutations as $perm) {
            $results[] = $char . $perm;
        }
    }

    return $results;
}

$input = trim(fgets(STDIN));

if ($input === "") {
    echo "Please enter a valid string.\n";
    exit;
}

$permutations = stringPermutations($input);

sort($permutations);

echo implode(" ", $permutations) . "\n";
?>
