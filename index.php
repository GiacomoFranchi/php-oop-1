<?php
require_once __DIR__ .'/Models/Movie.php';
require_once __DIR__ .'/Models/Genere.php';

$generi =[
    $genereba = new Genere('commedia', 'fantastico', 'avventura', 'sentimentale'),
    $genereg = new Genere('Comedy','Action','Fantasy'),
    $generebt = new Genere('Fantasy','Action','Triller')
];

$batman = new Movie('Batman', $generebt, 176, 'https://images.squarespace-cdn.com/content/v1/51b3dc8ee4b051b96ceb10de/1600041306046-ZKYYQ868MULDEN30MD3C/New+Poster+Art+For+THE+BATMAN5');

$groot = new Movie('I am Groot', $genereg, 15, 'https://4kwallpapers.com/images/walls/thumbs_3t/12562.jpg');

$movies =[
    $batman,
    $groot,
    new Movie('Barbie', $genereba ,114,'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTahCJaOHYo3_a4jfSb5kQ-nWXrYd4RYBcHqEOtR6A_dMtCrrRV')
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>
<body>
    <header>
        <h1>MOVIE INFO.COM</h1>
    </header>
    <main>
        <ul class="list-card">
        <?php foreach($movies as $movie){ ?>
            <li>
                <div class="card">
                    <img src=" <?php echo $movie->poster ?>" class="card-img-top" style="width: 100%" alt="<?php echo $movie->titolo ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->titolo ?></h5>
                        <p class="generi">
                            Generi: <br>
                                <?php echo $movie->genere->all_gener() ?>
                        </p>
                        <p class="card-text"><?php echo $movie->durata ?> Minuti <span class="tipo"> <?php echo $movie->durata_film() ?></span> </p>
                    </div>
                </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>

