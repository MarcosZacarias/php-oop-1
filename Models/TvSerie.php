<?php

class TvSerie extends Production
{
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(
    $_title,
    $_genres,
    $_poster,
    $_aired_from_year,
    $_aired_to_year,
    $_number_of_episodes,
    $_number_of_seasons,
  ) {
    parent::__construct($_title, $_genres, $_poster);
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

  }
  public function getDetails()
  {
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
      <strong>Emessa dall'anno: </strong>
      $this->aired_from_year
    </p>
    <p>
      <strong>Fino all'anno: </strong>
      $this->aired_to_year
    </p>
    <p>
      <strong>Numeri di episodi: </strong>
      $this->number_of_episodes
    </p>
    <p>
      <strong>Numeri di stagioni: </strong>
      $this->number_of_seasons
    </p>";

  }
}