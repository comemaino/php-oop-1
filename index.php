<!-- create un file index.php in cui:- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movie {
  public $title;
  public $director;
  public $year;
  public $rates;

  function __construct($_title, $_director, $_year, $_rates = []) {
    $this->title = $_title;
    $this->director = $_director;
    $this->year = $_year;
    $this->rates = $_rates;
  }

  public function getRatesAvg() {
    $ratesSum = 0;
    foreach($this->rates as $rate) {
      $ratesSum += $rate;
    }
    $ratesAvg = $ratesSum / count($this->rates);
    return $ratesAvg;
  }
}

$palombellaRossa = new Movie("Palombella Rossa", "Nanni Moretti", 1989, [3, 4, 5, 4, 3, 4]);

$eraserhead = new Movie("Eraserhead", "David Lynch", 1977, [4, 4, 5, 5, 5, 4, 5]);

$movies = [];
$movies[] = $palombellaRossa;
$movies[] = $eraserhead;
?>

<?php foreach($movies as $movie) { ?>
  <div>
    <h2> <?php echo $movie->title ?></h2>
    <h3> <?php echo $movie->director ?></h3>
    <h4> <?php echo $movie->year ?></h4>
    <h5> <?php echo number_format((float) $movie->getRatesAvg(), 1, '.', '') ?></h5>
  </div>
<?php } ?>