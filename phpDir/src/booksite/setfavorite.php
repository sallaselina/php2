<?php
// You will receive a GET parameter "id", which contains the book id.
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

if (isset($_COOKIE["favorite"])) {
    $favorites = explode(",", $_COOKIE["favorite"]); // returns an array of strings, cookie is always string
} else {
    $favorites = []; // if no favorite cookie, empty the array
}

$isFavorited = in_array($id, $favorites); // making a variable for the favorited

if ($isFavorited) {
    $favorites = array_diff($favorites, [$id]); // if the book is already favorited, remove from array
} else {
    $favorites[] = $id; // adds the id into the favorites array instead of overwriting it, allows multiple favorites instead of just one
}

$favorites_string = implode(",", $favorites);
setcookie("favorite", $favorites_string, time()+86400*30);

    header("Location: booksite.php"); 
    exit();

