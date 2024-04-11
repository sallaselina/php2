<?php
$error_msg = "";
    // Check if the GET parameter "logout" is set. If so, log the user out.
if (isset($_GET["logout"])) {
    session_start();
    session_unset();
    session_destroy();    
    header("Location: booksite.php");
    exit();
}
    // Check if the user is already logged in. If so, redirect to admin.php.
if (isset($_POST["username"]) && isset($_POST["password"])){
    session_start();
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    header("Location: admin.php");
    exit();
} else {
    $error_msg = "Something went wrong";
}
    // Check if the form has been sent. If so, check the username and password and if correct, log the user in and redirect to admin.php.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION["username"] == $_POST["username"] && $_SESSION["password"] == $_POST["password"]) {
        header("Location: admin.php");
        exit();
    }
    else {
        $error_msg = "Wrong username or password";
    }
  }
    // If not correct, show the error message near the form.
 
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
                <li><a href="booksite.php">Home</a></li>
                <li><a href="booksite.php?category=adventure">Adventure</a></li>
                <li><a href="booksite.php?category=classic">Classic Literature</a></li>
                <li><a href="booksite.php?category=coming-of-age">Coming-of-age</a></li>
                <li><a href="booksite.php?category=fantasy">Fantasy</a></li>
                <li><a href="booksite.php?category=historical">Historical Fiction</a></li>
                <li><a href="booksite.php?category=horror">Horror</a></li>
                <li><a href="booksite.php?category=mystery">Mystery</a></li>
                <li><a href="booksite.php?category=romance">Romance</a></li>
                <li><a href="booksite.php?category=scifi">Science Fiction</a></li>
            </ul>
        </nav>
        <main>
            <form action="login.php" method="post">
                <p>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </p>
                <p><input type="submit" name="login" value="Log in"></p>
            </form>
            <?php
            echo $error_msg;
            ?>
        </main>
    </div>    
</body>
</html>