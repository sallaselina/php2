<?php
require_once 'userapp.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
<h1>User Management</h1>
<form action="index.php" method="post">
    <label for="username"> Username </label>
    <input type="text" name="username" id="username"> <br>
    <label for="password"> Password </label>
    <input type="password" name="password" id="password"> <br>
    <input type="submit" name="submit" value="Submit">
</form>
<table class="default-table">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>
    <tr></tr>
</table>
</div>
<script src="script.js"></script>
</body>
</html>