<?php
include __DIR__ . "/Models/Movie.php";
include __DIR__ . "/Models/Genre.php";
include __DIR__ . "/data/db.php";

// var_dump($Movies);

$movie_1 = new Movie(
  $Movies[0]["title"],
  $Movies[0]["genre"],
  $Movies[0]["year"],
);

$movie_2 = new Movie(
  $Movies[1]["title"],
  $Movies[1]["genre"],
  $Movies[1]["year"],
);

var_dump($movie_1);
var_dump($movie_2)



  ?>