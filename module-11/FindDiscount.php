<?php
# Write your PHP code from here
fscanf(STDIN, "%d %d", $price, $dicount);
function discountPrice($price, $dicount)
{
    $newPrice = $price -  $price * ($dicount / 100);
    echo "Price: " . number_format($newPrice, 2);
}
discountPrice($price, $dicount);
