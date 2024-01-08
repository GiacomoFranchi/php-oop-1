<?php
class Movie{
public $titolo;
public $genere;
public $durata;

public function durata_film($durata){
    if(($durata <= 75)){
        $tipo_film = "Cortometraggio";
    } else{
        $tipo_film = "Lungometraggio";
    }
    return$tipo_film;
}

function __construct($_titolo, $_genere, $_durata) {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->durata = $_durata;
}
}

?>