<?php
$itemAmount = 3;
$cost = 5;
$subTotal = $itemAmount * $cost;
$tax = ($subTotal/100)*20;
$total = $subTotal + $tax;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Items in cart: <?=$itemAmount ?> </p>
  <p>Cost per item: <?=$cost ?> €</p>
  <p>Subtotal: <?=$subTotal ?> €</p>
  <p>Tax: <?=$tax?> € </p>
  <p> Your total is: <?=$total?> € </p>

</body>

</html>