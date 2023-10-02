<?php
// Class Production
include __DIR__ . "/Models/Production.php";
// Class Genre
include __DIR__ . "/Models/Genre.php";
// Class Movie
include __DIR__ . "/Models/Movie.php";
// Class TvSeries
include __DIR__ . "/Models/TvSerie.php";
// Data base Productions
include __DIR__ . "/data/db.php";

// List Productions with ogject
$list_productions = [];


// Loop add movie item in list Productions
foreach ($movies_data as $movie_data) {
  $genres = [];

  foreach ($movie_data["genres"] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }

  // Class movie
  $movie_item = new Movie(
    $movie_data["title"],
    $genres,
    $movie_data["poster"],
    $movie_data["published_year"],
    $movie_data["running_time"],
  );
  // Add item in list Productions
  $list_productions[] = $movie_item;


}
;

// Loop add movie item in list Productions
foreach ($tvseries_data as $tvserie_data) {
  $genres = [];

  foreach ($tvserie_data["genres"] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }

  // Class movie
  $movie_item = new TvSerie(
    $tvserie_data["title"],
    $genres,
    $tvserie_data["poster"],
    $tvserie_data["aired_from_year"],
    $tvserie_data["aired_to_year"],
    $tvserie_data["number_of_episodes"],
    $tvserie_data["number_of_seasons"],
  );
  // Add item in list Productions
  $list_productions[] = $movie_item;


}
;

// foreach ($list_productions as $product) {

//   var_dump($product);
//   echo "<hr>";
// }



?>