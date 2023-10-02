<?php

class Movie
{
  public $published_year;
  public $running_time;
  public function __construct(
    $_published_year,
    $_running_time,
  ) {
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }
}