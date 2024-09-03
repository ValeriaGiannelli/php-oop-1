<?php

// qui inserisco la classe Movie con le proprietà - metodi - costruttore
class Movie {
    public $title;
    public $year;
    public $duration;
    public $genre;

    // questa potrebbe essere una composizione
    public $cast;

    // costruttore
    public function __construct($_title, $_year, $_duration){
        $this -> title = $title;
        $this -> year = $year;
        $this -> duration = $duration;
    }
}