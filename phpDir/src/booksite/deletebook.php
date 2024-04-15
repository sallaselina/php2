<?php include 'db.php';
$msg = "";
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}

if (isset($_POST['delete-book'])) {
  $title = $_POST['title'];
  $stmt = $conn->prepare("DELETE FROM books where title = ?");
  $stmt->bind_param("s", $title);
  if ($stmt->execute()) {
    $msg = "Book deleted!";
  } else {
    die ("Failed to delete book");
  }
  $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="booksite.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Delete a book</h1>
        </header>
        <nav id="main-navi">
        <ul>
                <li><a href="booksite.php">Show All Books</a></li>
                <li><a href="addbook.php">Add a New Book</a></li>
                <li><a href="deletebook.php">Delete a Book</a></li>
                <li><a href="editbook.php">Edit a Book</a></li>
            </ul>
        </nav>
        <main>
            <h2>Select the title of the book to be deleted</h2>
            <form action="deletebook.php" method="post">
            <select name="title" id="title">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        echo "<option value='$title'>$title</option>";
      }
      ?>
    </select>
      
                <p><input type="submit" name="delete-book" value="Delete Book"></p>
            </form>
           <p> <?= $msg ?> </p>
        </main>
    </div>    
</body>
</html>