<?php

class Genre
{
    public $name;

    // Costruttore
    public function __construct($name)
    {
        $this->name = $name;
    }
}

trait Rating
{
    public $rating;

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }
}

class Movie
{
    use Rating;
    public $title;
    public $director;
    public $year;
    public $genres;

    // Costruttore
    public function __construct($title, $director, $year, $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    // Metodo per ottenere informazioni sul film
    public function getInfo()
    {
        $genres = array_map(function ($genre) {
            return $genre->name;
        }, $this->genres);
        $genres_str = implode(", ", $genres);
        return "Title: {$this->title}, Director: {$this->director}, Year: {$this->year}, Genres: {$genres_str}";
    }
}

// Creazione di due oggetti Genre
$genre1 = new Genre("Sci-Fi");
$genre2 = new Genre("Action");

// Creazione di due oggetti Movie
$movie1 = new Movie("Inception", "Christopher Nolan", 2010, [$genre1, $genre2]);
$movie2 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, [$genre2]);

// Impostazione del rating per i film
$movie1->setRating(8.8);
$movie2->setRating(8.7);

// Stampa delle proprietà dei film
echo $movie1->getInfo();
echo "<br>";
echo "Rating: " . $movie1->getRating();
echo "<br>";
echo $movie2->getInfo();
echo "<br>";
echo "Rating: " . $movie2->getRating();
