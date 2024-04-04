<?php
include 'db.php';

if (isset($_POST["submit"])) {
    $user = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($user) && !empty($password)) {
       $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?,?)");
       $stmt->bind_param("ss", $user, $password);
       if ($stmt->execute()) {
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
       } else {
        die ("Query failed.");
       }
       $stmt->close();
    } else {
        echo "Username and password cannot be empty";
    }
}
/* 
$host = "db";
//database name, username and password to access database
$dbname = "loginapp";
$dbuser = "root";
$dbpass = "lionPass";

// check the mysql connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully.";
} */

// create the records inside database

/* $query = "INSERT INTO users(username, password)";
$query .= "VALUES('$user', '$password')";
$result = mysqli_query($conn, $query);
    if (!$result) {
        die("Inserting database records failed");
} 
} */

?>
 <form action="create.php" method="post">
    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>