<?php include 'db.php';

if (isset($_POST["submit"])) {
    $id = $_POST["bookid"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $year = $_POST["year"];
    $genre = $_POST["genre"];
    $desc = $_POST["description"];

    if (!empty($id) && !empty($title) && !empty($author) && !empty($genre) && !empty($desc)) {
        $stmt = $conn->prepare("INSERT INTO books (id, title, author, publishing_year, genre, description) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $id, $title, $author, $year, $genre, $desc);
       if ($stmt->execute()) {
        header("Location: booksite.php");
        exit;
       };
        $stmt->close();
    } else {
        echo "Please fill in all the fields.";
    }
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
                <li><a href="admin.php">Admin Home</a></li>
                <li><a href="addbook.php">Add a New Book</a></li>
                <li><a href="login.php?logout">Log Out</a></li>
            </ul>
        </nav>
        <main>
            <h2>Add a New Book</h2>
            <form action="addbook.php" method="post">
                <p>
                    <label for="bookid">ID:</label>
                    <input type="number" id="bookid" name="bookid">
                </p>
                <p>
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title">
                </p>
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
                <p><input type="submit" name="add-book" value="Add Book"></p>
            </form>
        </main>
    </div>    
</body>
</html>