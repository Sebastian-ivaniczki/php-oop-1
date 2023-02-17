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
$movies = [$movie_1, $movie_2];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
         <?php foreach ($movies as $movie) { ?>
            <div class="card">
                <div>
                    <h1>
                        
                        <?php echo $movie->getTitle() ?>
                    </h1>
                </div>
                <div>
                    <h2>
                        Genre:
                        <?php echo $movie->getGenre() ?>
                    </h2>
                </div>
                <div>
                    <h3>
                        Vote:
                        <?php echo $movie->getVote() ?>
                    </h3>
                </div>
                <div>
                    <h4>
                        Plot:
                        <?php echo $movie->getPlot() ?>
                    </h4>
                </div>
            </div>
        <?php } ?>
        
    </div>
</body>
</html>
