<?php 
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?,?)");
        $stmt->bind_param("ss", $_POST["username"], $hashedPassword);
        $stmt->execute();
        $stmt->close();
    }
    if (isset($_POST["delete_id"])) {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $_POST["delete_id"]);
        $stmt->execute();
        $stmt->close();
    }
    if (isset($_POST["edit_id"])) {
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?  WHERE id = ?");
        $stmt->bind_param("ssi", $_POST["edit_username"], $_POST["edit_password"], $_POST["edit_id"]);
        $stmt->execute();
        $stmt->close();
    }
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
$result = $conn->query("SELECT * FROM users");
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
?>
