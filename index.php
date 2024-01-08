<?php
require_once __DIR__ .'/Models/Movie.php';

$batman = new Movie('Batman', ['Fantasy','Action'], 120);
var_dump($batman);
echo $batman->durata_film(120);

$groot = new Movie('I am Groot', ['Comedy','Action','Fantasy'], 30);
var_dump($groot);
echo $groot ->durata_film(30);
?>