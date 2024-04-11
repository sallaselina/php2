<?php include 'db.php';

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
                <li><a href="booksite.php">Home</a></li>
                <li><a href="booksite.php?genre=Adventure">Adventure</a></li>
                <li><a href="booksite.php?genre=Classic+Literature">Classic Literature</a></li>
                <li><a href="booksite.php?genre=Coming-of-age">Coming-of-age</a></li>
                <li><a href="booksite.php?genre=Fantasy">Fantasy</a></li>
                <li><a href="booksite.php?genre=Historical+Fiction">Historical Fiction</a></li>
                <li><a href="booksite.php?genre=Horror">Horror</a></li>
                <li><a href="booksite.php?genre=Mystery">Mystery</a></li>
                <li><a href="booksite.php?genre=Romance">Romance</a></li>
                <li><a href="booksite.php?genre=Science+Fiction">Science Fiction</a></li>
            </ul>
        </nav>
        <main>
            <?php
            $json = file_get_contents("books.json");
            $books = json_decode($json, true);

                
                if (isset($_GET["genre"])) { ?>
                    <h2>Genre: <?php print $_GET["genre"]?></h2>
                    <?php }
                    else { ?>
                    <h2>All books</h2>
                   <?php }

            foreach ($books as $book) {
                if (isset($_COOKIE["favorite"])) {
                $favorites = explode(",", $_COOKIE["favorite"]);
             }   else {
                $favorites = [];
                }
                $isFavorited = in_array($book['id'], $favorites); // checking if the book id is in the favorites array
            
                if ((!isset($_GET['genre']) || $_GET['genre'] === $book['genre'])) { ?> 
               <!--  if the genre has not been chosen, show all  
                OR the chosen genre matches the books genre, show the books in the chosen genre -->
                    <section class="book"> <?php
                    echo '<a class="bookmark fa ' . ($isFavorited ? 'fa-star' : 'fa-star-o') . '" href="setfavorite.php?id=' . $book["id"] . '"></a>';?>
                    <h3> <?php echo $book["title"] ?></h3>
                    <p class="publishing-info">
                    <span class="author"><?php echo $book["author"]?></span> 
                    <span class="year"><?php echo $book["publishing_year"]?></span>
                    </p>
                    <p class="description"> <?php echo $book["description"]?> </p>
                    </section> <?php
                }
    }
            ?>
            </section>

        </main>
    </div>    
</body>
</html>