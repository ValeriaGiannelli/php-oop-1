<?php
// importo Movie.php
require_once __DIR__ . '/../Model/Movie.php';
require_once __DIR__ . '/../Model/Cast.php';
// qui creao eventuale database per inserire le istanze della classe Movie

$movies = [
    new Movie('Una pallottola spuntata', '1988', 86, ['comico', 'poliziesco'], [new Cast('Leslie', 'Nielsen'), new Cast('Priscilla', 'Presley')]),
    new Movie('White chicks', '2004', 109, ['comico'], [new Cast('Marlon', 'Wayans'), new Cast('Shawn', 'Wayans')]),
    new Movie('Scary Movie 3', '2003', 84, ['comico', 'commedia'], [new Cast('Anna', 'Faris'), new Cast('Charlie', 'Sheen')]),
];