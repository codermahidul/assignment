<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Task 4: Even or Odd Checker


Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.

 -->

    <section id="container">
        <h1>Even or Odd Checker</h1>
        <form method="POST">
            <div class="formGroup">
                <span>Your Number</span>
                <input type="number" placeholder="Enter Your Number" required name="number">
            </div>
            <button type="submit">Check</button>
        </form>

        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number = $_POST['number'];
                $result = $number % 2;
                if ($result == 0) {
                    $result = "Even";
                }else{
                    $result = "Odd";
                }
            }
            ?>
        <div class="result">
            <h2>Number <?php echo $_POST['number']; ?> Is: <span>
                <?php
                    if (isset($result)) {
                        echo $result;
                    }
                ?>
            </span></h2>
        </div>
    </section>
</body>
</html>