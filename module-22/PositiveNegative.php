<?php
    
    //  ব্যবহারকারীর ইনপুট থেকে একটি সংখ্যা নিয়ে সেটি ধনাত্মক (positive), ঋণাত্মক (negative), অথবা শূন্য (zero) তা নির্ধারণ করে এই প্রোগ্রামটি।
    $number = intval(trim(fgets(STDIN)));

    // সংখ্যার ধরণ নির্ধারণ
    if ($number > 0) {
        echo "$number is a positive number.\n";
    } elseif ($number < 0) {
        echo "$number is a negative number.\n";
    } else {
        echo "The number is zero.\n";
    }
?>