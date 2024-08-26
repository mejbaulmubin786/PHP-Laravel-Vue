<?php
# Write your PHP code from here
fscanf(STDIN, "%d %d", $price, $discount);
function discountPrice($price, $percent)
{
    $newPrice = $price * ($percent / 100);

    echo "Price: " . number_format($newPrice, 2);
}
discountPrice(50, 50);
