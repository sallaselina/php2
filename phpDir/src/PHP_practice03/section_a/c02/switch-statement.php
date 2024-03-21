<?php
$day = "Monday";

?>
<!DOCTYPE html>
<html>

<head>
  <title>Switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>
  <?php
 switch ($day) {
  case "Monday":
    echo "20% off chocolates";
    break;
  case "Tuesday": 
    echo "20% off mints";
    break;
  default: 
    echo "Buy three packs, get one free.";
    break;
 }
  ?>
  </p>
</body>

</html>