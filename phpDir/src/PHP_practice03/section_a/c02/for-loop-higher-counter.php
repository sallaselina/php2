<?php
$packPrice = 1.99;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    for ($orderAmount = 10; $orderAmount <= 100; $orderAmount++) {
      $total = $orderAmount * $packPrice;
      echo "Price per $orderAmount pack is: $total <br>";
    }
    ?>
  </p>
</body>

</html>