<?php
$username = "Salla";
?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<p>
<?php
if ($userName !== "") {
  echo "Hello " . $username;
}
?>
</p>
</body>

</html>