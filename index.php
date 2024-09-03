<?php
// importo i due file php con classe e db
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>oop</title>
</head>
<body>
    <!-- stampo in pagina le informazioni dei movie -->
    <div class="d-flex">
        <?php foreach($movies as $movie): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <!-- titolo film -->
                    <h5 class="card-title">
                        Titolo: <?php echo $movie->title ?>
                    </h5>

                    <!-- anno -->
                    <p class="card-text">
                        Anno: <?php echo $movie->year ?>
                    </p>

                    <!-- durata -->
                    <p class="card-text">
                        Durata: <?php echo $movie->duration?> min.
                    </p>

                    <!-- generi con ciclo foreach -->
                    <p class="card-text">
                        Genere: 
                        <ul>
                            <?php foreach($movie->genres as $genre): ?>
                                <li><?php echo $genre ?></li>
                            <?php endforeach;?>
                        </ul> 
                    </p>

                    <!-- descrizione con metodo -->
                    <p class="card-text">
                        Descrizione: <?php $movie->printFullDescription() ?>
                    </p>
                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>