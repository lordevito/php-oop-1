<?php 

class Movie {
  public $title;
  public $description;
  public $year;
  public $genres;

//COSTRUTTORE

public function __construct(string $title, string $description, int $year, array $genres = [])
  {
    $this->title = $title;
    $this->description = $description;
    $this->year = $year;
    $this->genres = $genres;
  }

//METODI

  //Controlla se l'anno e restituisce una stringa

  public function checkYear() {
    if($this->year < 2000) {
      echo 'inizia ad essere d\'altri tempi';
    };
  }

  //Stampa i generi
  private function printGenres(){
    foreach($this->genres as $genre){
      echo $genre .' ';
    }
  }

  //Controlla se l'array dei generi è pieno
  public function hasGenres(){
    if(empty($this->genres)){
      $this->genres[0] = 'nessun genere definito';
    }
    $this->printGenres();
  }

}