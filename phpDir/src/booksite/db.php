<?php
$host = 'db';
$dbname = 'booksite';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}