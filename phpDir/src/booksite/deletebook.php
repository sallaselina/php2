<?php include 'db.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}
    // If the user is not logged in, redirect them back to login.php.
    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
    // Check the POST parameter "bookid". If it's set, delete the corresponding book from the data file.
    if (isset($_POST["bookid"])) {

    }
    // Hint: array_diff will not work here, since you'd need to create the whole book "object". Find the index and use array_splice instead.

    // Redirect back to admin.php.

header("Location: admin.php");
exit();