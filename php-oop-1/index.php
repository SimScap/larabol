<?php
include_once __DIR__ . "/classes/Movie.php";
include_once __DIR__ . "/classes/Genre.php";

$topGun = new Movie("Top Gun", new Genre("Action", false), "Tony Scott", "Don Simpson", "English", "1986");

var_dump($topGun->getGenre()->isAdultGenre());

?>

