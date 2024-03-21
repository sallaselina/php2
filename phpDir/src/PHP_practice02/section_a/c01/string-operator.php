<?php
$customerName = "Lisa";
$greeting = "Thank you for your purchase, " . $customerName;

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2><?=$customerName?>'s order completed </h2>
<p> <?=$greeting?></p>
</body>

</html>