<?php

class Genre
{
  public $genres;


  public function __construct(
    $_genres,
  ) {
    $this->genres = $_genres;

  }

  public function getAllGenres()
  {
    $string_genres = "";
    foreach ($this->genres as $genre) {
      $string_genres .= $genre . "; ";
    }
    ;

    return $string_genres;
  }

}