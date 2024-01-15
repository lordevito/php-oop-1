<?php 

class Movie {
  public $title;
  public $description;
  public $year;
  public $genres;
  public $checkYearVisibility = false;

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
      $this->checkYearVisibility = true;
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

//crea instanze per film da classe Movie
$lord = new Movie('Il Signore degli Anelli - La Compagnia dell\'Anello', 'Un giovane hobbit e un variegato gruppo, composto da umani, un nano, un elfo e altri hobbit, partono per un delicata missione, guidati dal potente mago Gandalf. Devono distruggere un anello magico e sconfiggere così il malvagio Sauron.', 2002, ['Azione','Avventura','Fantascienza']);

echo 'Oggetto Film';
print '<br>';

print_r($lord);
print '<br><br>';

echo 'Elenco attributi';
print '<br>';

//Controlla se ci sono generi
echo $lord->title;
print '<br>';
echo $lord->year;
print '<br>';
//stampa i generi
$lord->hasGenres();

print '<br>'.'<br>';

echo $lord->description;

print '<br>'.'<br>';

if($lord->checkYearVisibility){
echo 'Metodi';
echo '<br>';
print $lord->checkYear();
}

echo '<br>';
echo '<hr>';
echo '<br>';


$matrix = new Movie('Matrix', 'Esistono due realtà: una è l\'esistenza che conduciamo ogni giorno, l\'altra è nascosta. Neo vuole scoprire la verità su Matrix, mondo virtuale elaborato al computer creato per tenere sotto controllo le persone. Morpheus potrebbe aiutarlo.', 1999, ['Azione', 'Fantastico']);

echo 'Oggetto Film';
print '<br>';

print_r($matrix);
print '<br><br>';

echo 'Elenco attributi';
print '<br>';

//Controlla se ci sono generi
echo $matrix->title;
print '<br>';
echo $matrix->year;
print '<br>';
//stampa i generi
$matrix->hasGenres();

print '<br>'.'<br>';

echo $matrix->description;

print '<br>'.'<br>';

if($matrix->checkYearVisibility){
echo 'Metodi';
echo '<br>';
print $matrix->checkYear();
}