<?php

/*

*/

class Movie
{
    public $title;
    public $genre;
    public $vote;
    public $plot;

    public function __construct($title, $genre, $vote, $plot)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->plot = $plot;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getVote(){
        return $this->vote;
    }
    public function getPlot(){
        return $this->plot;
    }
};


$movie_1 = new Movie('Aatar', 'sci-fi', 5,'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum expedita quibusdam labore illum provident, porro, ullam totam autem deleniti minima eos. Nihil suscipit totam nisi facere, ipsam sint accusamus tempora!');
$movie_2 = new Movie('The Lord of the Rings', 'fantasy', 4,'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum expedita quibusdam labore illum provident, porro, ullam totam autem deleniti minima eos. Nihil suscipit totam nisi facere, ipsam sint accusamus tempora!');
$movie_aray = [$movie_1, $movie_2];

var_dump($movie_aray)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
