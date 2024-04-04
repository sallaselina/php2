<?php include 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM users where id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
      header("Location: " . $_SERVER["PHP_SELF"]);
      exit;
    } else {
      die ("Failed to delete data");
    }
    $stmt->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>
<body>
  <form action="delete.php" method="post">
    <h2> Select ID of the user to be deleted </h2>
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
  </form>
</body>
</html>