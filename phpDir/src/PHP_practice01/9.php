<?php
session_start();
$cookie_name = "test-user";
$cookie_value = 1234;
setcookie($cookie_name, $cookie_value, time() + (86400 * 7));
// week = time() + 60*60*24*7 
include "functions.php"; 
include "includes/header.php"; 
;?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation();
  
    ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php
  

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
		?>


<a href="9.php?number=1234&name=test-user">Click here</a>
<br>
<?php

$_SESSION["username"] = "test-user";
echo $_SESSION["username"];

if (isset($_GET["number"])) {
$number = $_GET["number"];
echo $number;
}




?>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>