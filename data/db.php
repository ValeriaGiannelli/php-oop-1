<?php
// importo Movie.php
require_once __DIR__ . '/../Model/Movie.php';
// qui creao eventuale database per inserire le istanze della classe Movie

$movies = [
    new Movie('Una pallottola spuntata', '1988', 86, ['comico', 'poliziesco']),
    new Movie('White chicks', '2004', 109, ['comico']),
    new Movie('Scary Movie 3', '2003', 84, ['comico', 'commedia']),
];