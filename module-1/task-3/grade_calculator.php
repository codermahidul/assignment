<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Task 3: Grade Calculator


Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 


Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).


Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F) -->

    <section id="container">
        <h1>Grade Calculator</h1>
        <form method="POST">
            <div class="formGroup">
                <span>Bangla</span>
                <input type="number" placeholder="Enter Your Number" max="100" required name="bangla">
            </div>
            <div class="formGroup">
                <span>English</span>
                <input type="number" placeholder="Enter Your Number" max="100" required name="english">
            </div>
            <div class="formGroup">
                <span>Mathematics</span>
                <input type="number" placeholder="Enter Your Number" max="100" required name="mathematics">
            </div>
            <button type="submit">Result</button>
        </form>

        

        <div class="result">
            <h2>Your Grade: <span>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $bangla = $_POST['bangla'];
                $english = $_POST['english'];
                $mathmatics = $_POST['mathematics'];

                $avarage = ($bangla + $english + $mathmatics) / 3;

                if ($avarage >= 90) {
                    echo "A";
                }elseif ($avarage >= 80) {
                    echo "B";
                }elseif ($avarage >= 60) {
                    echo "C";
                }elseif ($avarage >= 50){
                    echo "D";
                }else{
                    echo "F";
                }
            }
            ?>
            </span></h2>
        </div>
    </section>
</body>
</html>