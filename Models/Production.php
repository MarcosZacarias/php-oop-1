<?php

class Production
{
  public $title;
  public $genres;
  public $poster;

  public function __construct(
    $_title,
    $_genres,
    $_poster,
  ) {
    $this->title = $_title;
    $this->genres = $_genres;
    $this->poster = $_poster;
  }

  public function get_all_genres()
  {
    $genres_name = array_map(fn($genre_text) => $genre_text->name, $this->genres);
    return implode(" - ", $genres_name);

  }

  public function getDetails()
  {
    return "
    
    <img src=$this->poster alt=>
    <div class=card-body>
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
    </div>
    ";


  }

}