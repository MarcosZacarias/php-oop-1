<?php

class Movie extends Production
{
  public $published_year;
  public $running_time;
  public function __construct(
    $_title,
    $_genres,
    $_poster,
    $_published_year,
    $_running_time,
  ) {
    parent::__construct($_title, $_genres, $_poster);
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }
}