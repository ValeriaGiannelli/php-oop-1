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

            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Titolo del film</h5>
                    <p class="card-text">anno</p>
                    <p class="card-text">durata</p>
                    <p class="card-text">Descrizione completa</p>
                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

    </div>

</body>
</html>