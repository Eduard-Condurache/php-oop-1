<?php 

class Movie {
    public $title;
    public $genre;
    public $plot;
    public $language;
    public $duration;

    private $ageRestriction;

    function __construct($title, $genre, $plot, $language, $duration) {
        $this->title = $title;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->language = $language;
        $this->duration = $duration;
    }

    public function setAgeRestriction($age) {
        if(
            is_numeric($age)
            &&
            $age >= 0
            &&
            $age < 18
        ) {
            $this->ageRestriction = "Il film è consigliato per adulti $age+";
        }
        else {
            $this->ageRestriction = "Film per tutte le età";
        }
    }

    public function getAgeRestriciton() {
        return $this->ageRestriction;
    }
}

$batman = new Movie(   
    'Batman 1',
    'Action',
    'trama batman',
    'EN',
    '2 hours'
);

$batman->setAgeRestriction(18);

$interstellar = new Movie(
    'Interstellar',
    'SCI-FI',
    'trama interstellar',
    'EN',
    '3 hours'

);

$interstellar->setAgeRestriction(16);

var_dump($batman);
var_dump($interstellar);


