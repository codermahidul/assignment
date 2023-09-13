<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Task 6: Comparison Tool


Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 


Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.


Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result

-->

    <section id="container">
        <h1>Comparison Tool</h1>
        <form method="POST">
            <div class="formGroup">
                <span>Number One</span>
                <input type="number" placeholder="Enter Your Number" required name="number1">
            </div>
            <div class="formGroup">
                <span>Number 2</span>
                <input type="number" placeholder="Enter Your Number" required name="number2">
            </div>
            <button type="submit">Result</button>
        </form>

        

        <div class="result">
            <h2>The larger number is: <span>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];

                $largernumber = ($number1 > $number2) ? $number1 : $number2;

                echo $largernumber;
            }
            ?>
            </span></h2>
        </div>
    </section>
</body>
</html>