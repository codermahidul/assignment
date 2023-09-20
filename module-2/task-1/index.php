<?php 

// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
// Also do the same using while loop and do-while loop also.


// Task 1.1 print even numbers using for loop.
echo "Task 1.1 : Even Number Using For Loop <br><br>";
function evenNumberUsingForLoop($start, $end, $step){
    for ($i= $start; $i <= $end ; $i += $step) { 
        
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
}

evenNumberUsingForLoop(1,20,1);

// Task 1.2 print even numbers using while loop.

echo "<br>Task 1.2 Print Even Numbers Using While Loop. <br><br>";


function evenNumberUsingWhileLoop($start, $end, $step){
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i+= $step;
    }
}

evenNumberUsingWhileLoop(1,20,1);


echo "<br>Task 1.3 Print Even Numbers Using Do While Loop. <br><br>";
function evenNumberUsingDoWhileLoop($start, $end, $step){
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i+= $step;
    } while ($i <= $end);
}

evenNumberUsingDoWhileLoop(1,20,1);







?>