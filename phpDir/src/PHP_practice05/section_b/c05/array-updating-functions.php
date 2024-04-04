<?php
$orderedItems = ["Notebook", "Pencil", "Eraser"];
array_unshift($orderedItems, "Scissors");
array_pop($orderedItems);
$listItems = implode(", ", $orderedItems);

?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>

<p> <?= $listItems?>

<?php include 'includes/footer.php'; ?>