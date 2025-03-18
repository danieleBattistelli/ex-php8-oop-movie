<?php

class Genre {
    public $name;

    // Costruttore
    public function __construct($name) {
        $this->name = $name;
    }
}

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    // Costruttore
    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Metodo per ottenere informazioni sul film
    public function getInfo() {
        return "Title: {$this->title}, Director: {$this->director}, Year: {$this->year}, Genre: {$this->genre->name}";
    }
}

// Creazione di due oggetti Genre
$genre1 = new Genre("Sci-Fi");
$genre2 = new Genre("Action");

// Creazione di due oggetti Movie
$movie1 = new Movie("Inception", "Christopher Nolan", 2010, $genre1);
$movie2 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, $genre2);

// Stampa delle proprietà dei film
echo $movie1->getInfo();
echo "<br>";
echo $movie2->getInfo();

?>
