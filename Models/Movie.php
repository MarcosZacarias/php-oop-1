<?php

class Movie extends Production
{
  public static $time_unit_measure = "min";
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

  public function getDetails()
  {
    $um = self::$time_unit_measure;
    return "
    <p>
      <strong>Titolo: </strong>
      $this->title
    </p>
    <p>
      <!-- Loop foreach genre in list Genres -->
      <span>
        <strong>Generi: </strong>
        {$this->get_all_genres()}
      </span>
    </p>
    <p>
      <strong>Anno di uscita: </strong>
      $this->published_year
    </p>
    <p>
      <strong>Durata: </strong>
      $this->running_time $um
    </p>";

  }
}