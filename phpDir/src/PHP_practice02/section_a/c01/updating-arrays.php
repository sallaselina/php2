<?php

$nutrition = array("fat" => "30%", 
  "sugar" => "20%",
  "salt" => "10%");

$nutrition["fat"] = "29%";
$nutrition["fiber"] = "10%";

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat contents: <?php
  echo $nutrition["fat"];
  ?>
  <p>Fiber contents: <?php
  echo $nutrition["fiber"];?>

</body>

</html>