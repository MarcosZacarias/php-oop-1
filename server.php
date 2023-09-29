<?php
// Class Movie
include __DIR__ . "/Models/Movie.php";
// Class Genre
include __DIR__ . "/Models/Genre.php";
// Data base movies
include __DIR__ . "/data/db.php";

// List movies with ogject
$list_movies = [];

// Loop add movie item in list movies
foreach ($Movies as $film) {
  // Class movie
  $movie_item = new Movie(
    $film["title"],
    new Genre($film["genres"]),
    $film["year"],
  );
  // Add item in list movies
  $list_movies[] = $movie_item;
}
;

// var_dump($list_movies[0]->title);



?>