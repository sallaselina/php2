<?php
$name = "John";
$favorites = ["bubble gum", "mints"];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
 <p> Hello,  <?=$name . '<br>' . implode (", ", $favorites);?> are your favorites. </p>
</body>

</html>