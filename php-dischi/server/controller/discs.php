<?php
    // esporre pubblicamente i dati del db.php
    include_once __DIR__ . '/../database/db.php';

    $discs = [];

    // discs filtra in base al genere

    if (!empty($_GET) && !empty($_GET['genre'])){
        // la stringa richiesta dall'utente via queryString
        $queryGenre = strtolower($_GET['genre']);
        foreach ($database as $disc){
            $currentGenre = strtolower($disc['genre']);
            if ( $currentGenre == $queryGenre ){
                $discs[] = $disc;
                // array_push($discs, $disc);
            }
        }
    } else {
        $discs = $database;
    }

    header('Content-Type: application/json');
    echo json_encode($discs);
?>
