<?php
$greetings = ["Hello", "Hola", "Ciao", "Moi", "Hej"];
$randomGreet = array_rand($greetings);
$greet = $greetings[$randomGreet];

$bestSellers = ["notebook", "pencil","ink"];
$bestSellersCount = count($bestSellers);
$bestSellersList = implode(", ", $bestSellers);

$customerDetails = ["firstName" => "John", "lastName" => "Smith", "email" => "johnsmith@mail.com"];

if (array_key_exists("firstName", $customerDetails)) {
    $greet .= $customerDetails["firstName"];
}
?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<p>
<?=$greet?> <br>
Our top <?=$bestSellersCount?> products are
<?=$bestSellersList?>
</p>

<?php include 'includes/footer.php'; ?>