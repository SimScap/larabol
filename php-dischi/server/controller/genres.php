<?php
    // esporre pubblicamente i dati del db.php
    include_once __DIR__ . '/../database/db.php';

    $genres = [];

    foreach($database as $disc){
        if (!in_array(strtolower($disc['genre']), $genres)){
            $genres[] = strtolower($disc['genre']);
        }
    }

    header('Content-Type: application/json');
    echo json_encode($genres);
?>
