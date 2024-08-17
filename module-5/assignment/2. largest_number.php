<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;
if($num1>$num2){
    if($num1>$num3){
        echo $num1;
    }
    else{
        echo $num3;
    }
}
else{
        if($num2>$num3){
            echo $num2;
        }
        else{
            echo $num3;
        }

    }
?>