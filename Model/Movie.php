<?php

// qui inserisco la classe Movie con le proprietà - metodi - costruttore
class Movie {
    public $title;
    public $year;
    public $duration;
    public $genres = [];

    // questa potrebbe essere una composizione
    public $actors = [];

    // costruttore
    public function __construct($_title, $_year, $_duration, $_genre, array $_actor){
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> duration = $_duration;
        $this -> genres = $_genre;
        $this -> actors = $_actor;
    }

    // funzione

    public function printFullDescription(){
        echo "{$this -> title} è un film del {$this -> year} della durata di {$this -> duration} min.";
    }
}