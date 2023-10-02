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
foreach ($movies_data as $film_data) {



  $genres = [];

  foreach ($film_data["genres"] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }

  // Class movie
  $movie_item = new Movie(
    $film_data["title"],
    $genres,
    $film_data["year"],
    $film_data["poster"],

  );
  // Add item in list movies
  $list_movies[] = $movie_item;


}
;

// foreach ($list_movies as $movie) {

//   var_dump($movie->get_all_genres());
//   echo "<hr>";
// }



?>