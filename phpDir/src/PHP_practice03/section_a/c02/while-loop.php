<?php
$packPrice = 1.99;
$orderAmount = 0;
$total = $packPrice * $orderAmount;
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    while ($orderAmount < 5) {
      $orderAmount++;
      $total = $packPrice * $orderAmount;
      echo "Price per $orderAmount pack is: $total <br>";
    }
    ?>
  </p>
</body>

</html>