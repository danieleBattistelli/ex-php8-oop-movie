<?php

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

// Creazione di oggetti Genre
$genre1 = new Genre("Sci-Fi");
$genre2 = new Genre("Action");
$genre3 = new Genre("Drama");
$genre4 = new Genre("Comedy");

// Creazione di oggetti Movie
$movies = [
    new Movie("Inception", "Christopher Nolan", 2010, [$genre1, $genre2]),
    new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, [$genre2]),
    new Movie("Interstellar", "Christopher Nolan", 2014, [$genre1, $genre3]),
    new Movie("The Dark Knight", "Christopher Nolan", 2008, [$genre2, $genre3]),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [$genre3]),
    new Movie("Forrest Gump", "Robert Zemeckis", 1994, [$genre3, $genre4]),
    new Movie("The Shawshank Redemption", "Frank Darabont", 1994, [$genre3]),
    new Movie("The Godfather", "Francis Ford Coppola", 1972, [$genre3]),
    new Movie("The Avengers", "Joss Whedon", 2012, [$genre2]),
    new Movie("Back to the Future", "Robert Zemeckis", 1985, [$genre1, $genre4])
];

// Impostazione del rating per i film
$movies[0]->setRating(8.8);
$movies[1]->setRating(8.7);
$movies[2]->setRating(8.6);
$movies[3]->setRating(9.0);
$movies[4]->setRating(8.9);
$movies[5]->setRating(8.8);
$movies[6]->setRating(9.3);
$movies[7]->setRating(9.2);
$movies[8]->setRating(8.1);
$movies[9]->setRating(8.5);
