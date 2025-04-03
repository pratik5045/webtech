<?php
$xml=new DOmDocument();
$xml->load("movie.xml");
$movies=$xml->getElementsByTagName("movie");

foreach($movies as $movie)
{
  $movieNo = $movie->getAttribute("MovieNo"); 
    $title = $movie->getElementsByTagName("MovieTitle")->item(0)->textContent;
    $actor = $movie->getElementsByTagName("ActorName")->item(0)->textContent;
    $releaseYear = $movie->getElementsByTagName("ReleaseYear")->item(0)->textContent;

    echo "<b>Movie No:</b> $movieNo<br>";
    echo "<b>Movie Title:</b> $title<br>";
    echo "<b>Actor Name:</b> $actor<br>";
    echo "<b>Release Year:</b> $releaseYear<br>";
    echo "<hr>";
}
?>