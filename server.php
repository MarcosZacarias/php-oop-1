<?php
// Class Production
include __DIR__ . "/Models/Production.php";
// Class Genre
include __DIR__ . "/Models/Genre.php";
// Data base Productions
include __DIR__ . "/data/db.php";

// List Productions with ogject
$list_productions = [];


// Loop add Production item in list Productions
foreach ($productions_data as $production_data) {



  $genres = [];

  foreach ($production_data["genres"] as $genre_data) {
    $genres[] = new Genre($genre_data);

  }

  // Class Production
  $production_item = new Production(
    $production_data["title"],
    $genres,
    $production_data["poster"]

  );
  // Add item in list Productions
  $list_productions[] = $production_item;


}
;

// foreach ($list_productions as $product) {

//   var_dump($product);
//   echo "<hr>";
// }



?>