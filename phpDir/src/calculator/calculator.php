<?php

class Calculation {
    public $number1;
    public $number2;

    function __construct($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;

    }

    function add($number1, $number2) {
        return $number1 + $number2;
    }

    function subtract($number1, $number2) {
        return $number1 - $number2;
    }

    function multiply($number1, $number2) {
        return $number1 * $number2;

    }

    function division($number1, $number2) {
        return $number1 / $number2;
    }
}
$first = new Calculation(3, 4);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
} else {
    $number1 = 0;
    $number2 = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form action="calculator.php" method="post">
    <p> Give two numbers: <br>
    <input type="number" name="number1"> <br>
    <input type="number" name="number2">
    <input type="submit" value="Calculate">
       </form>
   <h2>Addition</h2>
   <p> <?php echo $first->add($number1, $number2); ?>
    <h2>Subtraction</h2>
    <p> <?php echo $first->subtract($number1, $number2); ?>
    <h2>Multiplication</h2>
    <p> <?php echo $first->multiply($number1, $number2); ?>
    <h2>Division</h2>
    <p> <?php echo $first->division($number1, $number2); ?>
</body>
</html>