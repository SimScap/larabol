<?php

    include __DIR__ . '/data.php';

    header('Content-Type: application/json');

    // Voglio dare all'utente due possibilità:
    // A) chiamare l'api in maniera generica (senza queryString) e ottenere tutti i post
    // B) chiamare l'api e chiedere l'ultimo post

    if (isset($_GET['latest'])){
        echo json_encode(
            [
                'results' =>  $posts[count($posts) - 1],
                'length' => count($posts[count($posts) - 1])
        ]);
    } else {
        echo json_encode(
            [
                'results' =>  $posts,
                'length' => count($posts)
        ]);
    }


?>

