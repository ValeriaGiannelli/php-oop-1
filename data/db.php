<?php
// importo Movie.php
require_once __DIR__ . '/../Model/Movie.php';
require_once __DIR__ . '/../Model/Actor.php';
// qui creao eventuale database per inserire le istanze della classe Movie

$movies = [
    new Movie('Una pallottola spuntata', '1988', 86, ['comico', 'poliziesco'], [new Actor('Leslie', 'Nielsen'), new Actor('Priscilla', 'Presley')]),
    new Movie('White chicks', '2004', 109, ['comico'], [new Actor('Marlon', 'Wayans'), new Actor('Shawn', 'Wayans')]),
    new Movie('Scary Movie 3', '2003', 84, ['comico', 'commedia'], [new Actor('Anna', 'Faris'), new Actor('Charlie', 'Sheen')]),
];