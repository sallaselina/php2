<?php
$candyStock = 100;

if ($candyStock > 25) {
    $message = "Good availability";
}
if ($candyStock > 0 && $candyStock < 10) {
    $message = "Low stock";
}

if ($candyStock == 0) {
    $message = "Out of stock";
}
?>


<h2>Chocolate</h2>
<?php
require_once 'includes/header.php';


?>
<p><?=$message?></p>

<?php require_once "includes/footer.php";?>