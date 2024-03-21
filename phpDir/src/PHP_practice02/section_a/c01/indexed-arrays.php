<?php

  $best_sellers = ["Chocolate", "Mints", "Fudge", "Gum", "Toffee", "Sour candy"];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p>The top 3 selling products are: 
    <ol>
      <?php
      echo "<li>" . $best_sellers[0];
      echo "<li>" . $best_sellers[1];
      echo "<li>" . $best_sellers[2];
      ?>
    </ol>
<!-- print_r(array_slice($best_sellers, 0, 3)); -->
</body>

</html>