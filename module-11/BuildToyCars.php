<?php
# Write your PHP code from here
function cars($wheel, $carBody, $figure)
{
    $carWheel = floor($wheel / 4);
    $carFigure = floor($figure / 2);
    $lowest = min($carWheel, $carBody, $carFigure);
    echo $lowest;
}
fscanf(STDIN, "%d %d %d", $wheel, $carBody, $figure);
cars($wheel, $carBody, $figure);
