<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

<p>
Filesize: <?=filesize($path)?>
File name: <?=pathinfo($path, PATHINFO_FILENAME)?>
Folder: <?=pathinfo($path, PATHINFO_DIRNAME)?>
MIME type: <?= mime_content_type($path)?>
</p>

<?php 
?>

<?php include 'includes/footer.php'; ?>