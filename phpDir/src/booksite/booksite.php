<?php include "db.php";

$result = $conn->query("SELECT * FROM books");
$rows = array();
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorite Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="booksite.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Your Favorite Books</h1>
        </header>
        <nav id="main-navi">
            <ul>
            <li><a href="booksite.php">Show All Books</a></li>
                <li><a href="addbook.php">Add a New Book</a></li>
                <li><a href="deletebook.php">Delete a Book</a></li>
                <li><a href="editbook.php">Edit a Book</a></li>
            </ul>
        </nav>
        <main>
        <h2>All books</h2>
        <table class="book">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publishing Year</th>
        <th>Description</th>
        <th>Genre</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($result->num_rows > 0) : ?>
        <?php foreach ($result as $row) : ?>
    <tr data-id="<?= $row["id"]?>">
<td><?=$row["id"]?></td>
<td><?= $row["title"] ?></td>
<td class="author"><?= $row["author"]?></td>
<td class="year"><?= $row["publishing_year"]?></td>
<td class="description"><?= $row["description"]?></td>
<td><?= $row["genre"]?></td>
</tr>
<?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan='4'>
        No results.
        </td>
    </tr>
    <?php endif;?>
    </tbody>
</table>
        </main>
    </div>    
</body>
</html>