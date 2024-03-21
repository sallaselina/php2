<?php

$offers = array(
  array("Sour candy", "3 €", 12),
  array("Licorice", "4 €", 29)
);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p>Name: <?php echo $offers[0][0] ?></p>
  <p>Price: <?php echo $offers[0][1]?></p>
  <p>Name: <?php echo $offers[1][0] ?></p>
  <p>Price: <?php echo $offers[1][1]?></p>
</body>

</html>