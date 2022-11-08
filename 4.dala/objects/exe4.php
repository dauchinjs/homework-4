<?php

class Movie {
    public string $title;
    public string $studio;
    public string $rating;
    public array $movies;

    public function __construct($title, $studio, $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function printMovie(): string {
        return "Movie title '$this->title', the studio '$this->studio', the rating '$this->rating'";
    }
    function GetPG($movies): array{
        $moviesWithPG = [];
        foreach($this->movies as $this->rating) {
            if($this->rating === "PG") {
                $moviesWithPG[] = $movies;
            }
        }
        return $moviesWithPG;
    }
}
$movies = [
$movie1 = new Movie("Casino Royale", "Eon Productions", "PG13"),

$movie2 = new Movie("Glass", "Buena Vista International", "PG13"),

$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

echo $movie1->printMovie();
echo PHP_EOL;
echo $movie2->printMovie();
echo PHP_EOL;
echo $movie3->printMovie();
echo PHP_EOL;


var_dump($movie1->GetPG($movie3));
