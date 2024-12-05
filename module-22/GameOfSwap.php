<?php
    

    //  কোডটি দুইটি সংখ্যার মান একে অপরের সাথে অদলবদল (swap) করে
    fscanf(STDIN, "%d %d", $num1, $num2);

    //  অদলবদল করার আগে মান প্রিন্ট করা
    echo "Before swapping: num1 = $num1, num2 = $num2\n";

    // সংখ্যাগুলোর মান অদলবদল করা হচ্ছে। চাইলে এটিকে আমরা এভাবে না করে 
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    // অদলবদলের পরে মান প্রিন্ট করা
    echo "After swapping: num1 = $num1, num2 = $num2\n";
?>
