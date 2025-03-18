<?php

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Rating.php';
require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di Film</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <h1 class="my-4">Lista di Film</h1>
    <?php foreach ($movies as $movie): ?>
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title"><?php echo $movie->getTitle(); ?></h2>
                <p class="card-text"><strong>Regista:</strong> <?php echo $movie->getDirector(); ?></p>
                <p class="card-text"><strong>Anno:</strong> <?php echo $movie->getYear(); ?></p>
                <p class="card-text"><strong>Generi:</strong>
                    <?php
                    $genres = $movie->getGenres();
                    $genreNames = array_map(function ($genre) {
                        return $genre->getName();
                    }, $genres);
                    echo implode(", ", $genreNames);
                    ?>
                </p>
                <p class="card-text"><strong>Rating:</strong> <?php echo $movie->getRating(); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>