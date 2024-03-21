<?php

$orderAmount = 25;
$stock = 12;

$comparison = $orderAmount<=$stock;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Amount ordered: <?=$orderAmount?></p>
  <p>Items in stock: <?=$stock?></p>
  <p> <?=$comparison?></p>
</body>

</html>