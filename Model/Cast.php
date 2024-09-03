<?php

class Cast {
    public $name;
    public $surname;

    // costrutto
    public function __construct($_name, $_surname){
        $this -> name = $_name;
        $this -> surname = $_surname;
    }

    // funzione per il nome completo dell'attore
    public function getFullName(){
        return $this->name . '' . $this->surname;
    }
}