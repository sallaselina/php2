<?php
$packPrice = 1.99;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
 for ($orderAmount = 1; $orderAmount <= 5; $orderAmount++) {
    $total = $packPrice * $orderAmount;
    echo "Price per $orderAmount pack is: $total <br>";
  }
    ?>
  </p>
</body>

</html>