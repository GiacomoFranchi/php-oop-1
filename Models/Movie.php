<?php
class Movie{
public $titolo;
public $genere;
public $durata;
public $poster;

public function durata_film(){
    return $this->durata <= 75 ? "Cortometraggio" : "Lungometraggio";
}

function __construct($_titolo, Genere $_genere, $_durata, $_poster,) {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->durata = $_durata;
    $this->poster = $_poster;
}
}

?>