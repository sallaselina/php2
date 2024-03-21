<?php

  $nutrition = array("fat" => "30%", 
  "sugar" => "20%",
  "salt" => "10%");

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p> Fat contents: <?php echo $nutrition["fat"];?>
  <p> Sugar contents: <?php echo $nutrition["sugar"]; ?>
  <p> Salt contents: <?php echo $nutrition["salt"];
   ?>

</body>

</html>