<?php
if (isset($_POST["submit"])) {
    //echo "Data received.";
    $user = $_POST["username"];
    $password = $_POST["password"];

    echo $user . " " . $password;
}

//validate the form

if ($user && $password) {
    echo $user . " " . $password;
} else {
    echo "Username and password cannot be blank.";
}

$host = "db";
//database name, username and password
$dbname = "loginapp";
$dbuser = "root";
$dbpass = "lionPass";

// check the mysql connection status
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully.";
}

// create the records inside database
 $query = "INSERT INTO users(username, password)";
$query .= "VALUES('$user', '$password')";

$result = mysqli_query($conn, $query);

if (!$result || !$user || !$password) {
    die("Inserting database records failed");
} 

 // reading from database
 /* $query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Reading database records failed");
}

while ($row = mysqli_fetch_assoc($result)) {
   ?>
   <pre>
    <?php 
    print_r($row);?>
   </pre> <?php
}
*/
?>
 <form action="login.php" method="post">
    <h1>User management</h1>
    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="delete" value="Delete">
</form>