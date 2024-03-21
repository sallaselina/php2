<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
$string = "Hello World";
$emptyString ="";

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if ($emptyString !== ""){
 echo "This is an empty string";}
else if ($string = "") {
	echo "This is an empty string";
}
else {
	echo "I love PHP";
}

for ($x = 1; $x <= 10;$x++) {
	echo $x . "\n";
}

$favLanguage = "Python";
switch ($favLanguage) {
	case "Javascript":
		echo "Your favorite programming language is Javascript.";
		break;
	case "PHP": 
		echo "Your favorite programming language is PHP!";
		break;
	case "Python": 
		echo "Your favorite programming language is Python.";
		break;
	case "C++":
		echo "Your favorite programming language is C++";
		break;
	case "Java":
		echo "Your favorite programming language is Java.";
		break;
		default: 
		echo "You do not have a favorite programming language.";	
}
?>








</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>