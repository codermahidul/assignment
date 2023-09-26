<?php


// Task 4: Multidimensional Array


// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = array(
    array('Math' => 85, 'English' => 92, 'Science' => 78),
    array('Math' => 75, 'English' => 88, 'Science' => 90),
    array('Math' => 92, 'English' => 86, 'Science' => 94)
);

function calculateAndPrintAverageGrades($grades) {
    $averageGrades = array();

    foreach ($grades as $student) {
        $average = array_sum($student) / count($student);

        $averageGrades[] = $average;
    }

    foreach ($averageGrades as $index => $average) {
        echo "Student " . ($index + 1) . " - Average Grade: " . number_format($average, 2) . "<br>";
    }
}

calculateAndPrintAverageGrades($studentGrades);



?>