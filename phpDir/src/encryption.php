<?php
$password = "mypassword";
$hasFormat = "$2y$05$";
$salt = "asdakeprooirrmwwnvoqp09";
$hashFormatandSalt = $hasFormat . $salt;

$encrypted_password = crypt($password, $hashFormatandSalt);
echo $encrypted_password;
