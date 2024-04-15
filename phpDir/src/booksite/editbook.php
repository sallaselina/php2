<?php include 'db.php';
$msg = "";
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}

if (isset($_POST['edit-book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $desc = $_POST['description'];
  
      $stmt = $conn->prepare("UPDATE books SET author = ?, genre = ?, publishing_year = ?, description = ? WHERE title = ?");
      
      $stmt->bind_param("sssss", $author, $genre, $year, $desc, $title);
      if ($stmt->execute()) {
        $msg = "Book updated!";
      } else {
        die ("Failed to update data.");
      }
      $stmt->close();
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorite Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="booksite.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Your Favorite Books</h1>
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
            <h2>Edit a Book</h2>
            <h3>Select which book you want to edit</h3>
            <form action="editbook.php" method="post">
            <select name="title" id="title">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        echo "<option value='$title'>$title</option>";
      }
      ?>
      <br>
                <p>
                    <label for="author">Author:</label>
                    <input type="text" id="author" name="author">
                </p>
                <p>
                    <label for="year">Year:</label>
                    <input type="number" id="year" name="year">
                </p>
                <p>
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre">
                        <option value="Adventure">Adventure</option>
                        <option value="Classic Literature">Classic Literature</option>
                        <option value="Coming-of-age">Coming-of-age</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Historical Fiction">Historical Fiction</option>
                        <option value="Horror">Horror</option>
                        <option value="Mystery">Mystery</option>
                        <option value="Romance">Romance</option>
                        <option value="Science Fiction">Science Fiction</option>
                    </select>
                </p>
                <p>
                    <label for="description">Description:</label><br>
                    <textarea rows="5" cols="100" id="description" name="description"></textarea>
                </p>
                <p><input type="submit" name="edit-book" value="Edit Book"></p>
            </form>
            <?=$msg ?>
        </main>
    </div>    
</body>
</html>