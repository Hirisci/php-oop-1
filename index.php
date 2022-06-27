<?php
require "./movie.php";


$movies = [
    new Movie("xXx", "Azione", 2002, 2.40),
    new Movie("Fast and Furious", "Avventura/Giallo", 2001, 1.46),
    new Movie("21", "Drammatico/Dramma", 2008, 2.03),
    new Movie("Matrix", "Sci-fi/Azione", 1999, 2.16),
];


foreach ($movies as $movie) {
    $movie->printToString();
    echo "<br><br><hr><br>";
}
