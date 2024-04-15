<?php
// Load the XML file
$doc = new DOMDocument();
$doc->load('movie.xml');

// Get all Movie elements
$movies = $doc->getElementsByTagName('Movie');

// Print MovieTitle and ActorName for each movie
echo "Movie Information:\n";
foreach ($movies as $movie) {
    $movieTitle = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
    $actorName = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
    echo "MovieTitle: $movieTitle, ActorName: $actorName\n";
}
?>
