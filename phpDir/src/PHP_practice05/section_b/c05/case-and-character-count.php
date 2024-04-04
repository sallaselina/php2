<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  <?=strtoupper($text) ?> <br>
  <?=strtolower($text) ?> <br>
  <?=strlen($text) ?> <br>
  <?=str_word_count($text) ?>

</p>

<?php include 'includes/footer.php'; ?>