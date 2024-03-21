<?php 
$item = 'Chocolate';
$stock = 5;
$wantedAmount = 3;
$deliver = true;
$can_buy = (($wantedAmount <= $stock) && ($deliver == true));
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Logical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h1>Shopping Cart</h1>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Ordered: <?= $wantedAmount ?></p>
    <p>Can buy: <?= $can_buy ?></p>
  </body>
</html>