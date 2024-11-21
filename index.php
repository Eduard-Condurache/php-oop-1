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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Trama!</th>
                    <th scope="col">Lingua!</th>
                    <th scope="col">Durata</th>
                    <th scope="col">Età consentita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $batman->title ?></td>
                    <td><?php echo $batman->genre ?></td>
                    <td><?php echo $batman->plot ?></td>
                    <td><?php echo $batman->language ?></td>
                    <td><?php echo $batman->duration ?></td>
                    <td><?php echo $batman->getAgeRestriciton() ?></td>
                </tr>
                <tr>
                    <td><?php echo $interstellar->title ?></td>
                    <td><?php echo $interstellar->genre ?></td>
                    <td><?php echo $interstellar->plot ?></td>
                    <td><?php echo $interstellar->language ?></td>
                    <td><?php echo $interstellar->duration ?></td>
                    <td><?php echo $interstellar->getAgeRestriciton() ?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </main>
</body>
</html>


