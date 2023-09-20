<?php


// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.


$fNumber = 0;
$sNumber = 1;
$count = 0;


while ($count < 10) {
    $nNumber = $fNumber + $sNumber;
    echo $fNumber . ' ';



    if ($nNumber > 100) {
        break;
    }

    $fNumber = $sNumber;
    $sNumber = $nNumber;

    $count++;
}


?>