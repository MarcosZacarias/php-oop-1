<?php

class Movie
{
  public $title;
  public $genres;
  public $year;
  public $poster;

  public function __construct(
    $_title,
    $_genres,
    $_year,
    $_poster
  ) {
    $this->title = $_title;
    $this->genres = $_genres;
    $this->year = $_year;
    $this->poster = $_poster;
  }

}