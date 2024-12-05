<?php
// এটি আগেরটির মতো তবে এই কোডটি আমাদের কাছ থেকে দুটি সংখ্যা ইনপুট নিয়ে তাদের মধ্যে ভাগফল (quotient) নির্ণয় করে।
$input = trim(fgets(STDIN));

list($a, $b) = explode(' ', $input);

$a = (int)$a;
$b = (int)$b;

// ভাগফল নির্ণয় এবং আউটপুট
echo intdiv($a, $b);
?>