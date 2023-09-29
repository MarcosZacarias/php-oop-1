<?php

class Movie
{
  public $title;
  public $genres;
  public $year;

  public function __construct(
    $_title,
    $_genres,
    $_year,
  ) {
    $this->title = $_title;
    $this->genres = $_genres;
    $this->year = $_year;
  }

}