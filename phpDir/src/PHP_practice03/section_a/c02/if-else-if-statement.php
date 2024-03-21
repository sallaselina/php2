<?php
$stock = 0;
$comingSoon = true;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>
  <?php
 if ($stock > 0) {
  echo "In stock";
 }
 elseif ($comingSoon === true) {
  echo "Coming soon";
 } else {
  echo "Not in stock";
 }
  ?>
  </p>
</body>

</html>