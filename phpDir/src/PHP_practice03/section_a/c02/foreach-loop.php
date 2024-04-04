<?php
$products = [
  "toffee" => 2.99,
  "mints" => 1.99,
  "fudge" => 3.49];
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
   foreach ($products as $candy => $price) {
    echo "<tr> <td> $candy </td><td>$price</td></tr>";
   }
    ?>
  </table>
</body>

</html>