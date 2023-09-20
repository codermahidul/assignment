<?php


// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.



function fibonacciSeries($number){

    $fNumber = 0;
    $sNumber = 1;

    for ($i=1; $i <= $number; $i++) { 
        echo $fNumber." ";
        $nNumber = $fNumber + $sNumber;

        $fNumber = $sNumber;
        $sNumber = $nNumber;
    }

    

}


fibonacciSeries(15);


?>