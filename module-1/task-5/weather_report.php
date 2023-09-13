<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Task 5: Weather Report


Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."

 -->

    <section id="container">
        <h1>Weather Report</h1>
        <form method="POST">
            <div class="formGroup">
                <span>Temperature</span>
                <input type="number" placeholder="Type Temperature" required name="number">
            </div>
            <button type="submit">Check</button>
        </form>

        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number = $_POST['number'];
                
                if ($number <= 0) {
                    $result = "It's freezing!";
                }elseif($number > 0  && $number <= 30){
                    $result = "It's cool.";
                }elseif($number > 30){
                    $result = "It's warm.";
                }
            }
            ?>

        <div class="result">
            <h2>Curent Temperature <?php echo $_POST['number']; ?> Is: <span>
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