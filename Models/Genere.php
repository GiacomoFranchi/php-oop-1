<?php 
class Genere {
    public $principale;
    public $secondario;
    public $terz;
    public $quart;

    public function __construct($_principale, $_secondario = null, $_terz = null, $_quart = null) {
        $this->principale = $_principale;
        $this->secondario = $_secondario;
        $this->terz = $_terz;
        $this->quart = $_quart;
    }

    function all_gener(){
        return $this->principale . ', ' . $this->secondario . ', ' . $this->terz . ', ' . $this->quart;
    }
}