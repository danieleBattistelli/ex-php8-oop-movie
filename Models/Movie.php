<?php

require_once __DIR__ . '/Rating.php';

class Movie
{
    use Rating;
    private $title;
    private $director;
    private $year;
    private $genres;

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

    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenres()
    {
        return $this->genres;
    }
}
