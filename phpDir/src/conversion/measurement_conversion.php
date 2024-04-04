<?php
function celsiusToFahrenheit (float $celsius): float {
    return $celsius * 1.8 + 32;
} 

function celsiusToKelvin (float $celsius): float {
    return $celsius + 273.15;
}

function ToMeters (float $km): float {
    return $km / 3.6;
}

function ToKnots(float $km): float {
    return $km * 0.539957;
}

function kgToG (float $kg): float {
    return $kg * 1000;
}

function GtoKg (float $g): float {
    return $g / 1000;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement conversion</title>
</head>
<body>
    <h1>Measurement conversion</h1>        
   <form action="measurement_conversion.php" method="post">
        <h2>Temperature</h2>
        <input type="number" value="Temperature" name="temp"> 
        <input type="submit" value="Submit">
            <h3>Celsius to Fahrenheit</h3>
            <?php if($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["temp"])) {
             echo celsiusToFahrenheit($_POST["temp"]);
            }
        }
             ?>
            <h3>Celsius to Kelvin</h3>
            <?php if ($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["temp"])) {
             echo celsiusToKelvin($_POST["temp"]);
            }
        }
             ?>
        <h2>Speed</h2>
        <input type="number" value="Speed" name="speed">
        <input type="submit" value="Submit">
            <h3>Km/h to m/s</h3>
            <?php if ($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["speed"])) {
             echo ToMeters($_POST["speed"]);
            } 
        }
             ?>
            <h3>Km/h to knots</h3>
            <?php if($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["speed"])) {
            echo ToKnots($_POST["speed"]);
            }
        }
            ?>
        <h2>Mass</h2>
        <input type="number" value="Mass" name="mass"> 
        <input type="submit" value="Submit">
            <h3>Kg to g</h3>
            <?php if($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["mass"])) {
            echo kgToG($_POST["mass"]);
            }
        }
            ?>
            <h3>G to kg</h3>
            <?php if($_SERVER["REQUEST_METHOD"]=="POST") {
                if (!empty($_POST["mass"])) {
                echo GtoKg($_POST["mass"]);
            }
        }
            ?>
</form>
    
</body>
</html>