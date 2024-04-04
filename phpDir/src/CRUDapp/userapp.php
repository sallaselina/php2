<?php 
session_start();
include 'create.php';
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?,?)");
        $stmt->bind_param("ss", $_POST["username"], $hashedPassword);
        $stmt->execute();
        $stmt->close();
    }
}
?>
