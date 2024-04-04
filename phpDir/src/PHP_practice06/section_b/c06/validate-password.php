<?php
/* Write PHP code here 

Step 1: Initialize two variables for password and message.

Step 2: Write a custom function to check password rules

Step 3: Use if statement to check basic expressions each representing true and false
Take a look, mb_strlen() to check if value contains 8 or more characters
Take a look preg_match, https://www.php.net/manual/en/function.preg-match.php

Hint: /[A-Z]/ checks uppercase characters
/[a-z]/ checks lowercase characters
/[0-9]/ checks numbers

Step 4:  If the form is submitted, password can be collected from $_POST superglobal

Step 5: The valid password can be checked by calling custom function 
and the result can be stored in some variable e.g. $valid

Step 6: Display the results. You may use ternary operator here to check if $valid variable holds true,
If so, $message holds success message otherwise, it holds an error message. 

Step 7: Message can be for example "Password is valid" or if not string
"Password is not strong enough."

*/
$password = "";
$message = "";

function checkPassword (string $password): bool {
    if (mb_strlen($password) < 8) && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password)){
        echo "Password too short";
    }
    if (preg_match('/[A-Z]/', $password) == 0) {
        echo "Your password must contain an uppercase letter";
}
    if (preg_match('/[a-z]/', $password) == 0) {
    echo "Your password must contain a lowercase letter";
}
    if (preg_match('/[0-9]/', $password) == 0) {
    echo "Your password must contain a number";
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $valid = checkPassword($password);
    $valid = true ? $message = "Login successful" : $message = "Password not strong enough";
}
?>
<?php include 'includes/header.php'; ?>

<form action="validate-password.php" method="post">
 <p> Username: <input type="text" name="username"> </p>
  <p> Password:  <input type="password" name="password"> </p>
  <input type="submit" value="login">
</form>
<?=$message?>
<?php include 'includes/footer.php'; ?>