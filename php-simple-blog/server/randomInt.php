<?php

    header('Content-Type: application/json');

    if(isset($_GET['min']) && isset($_GET['max'])){

        echo json_encode(
            [
                'results' =>  rand($_GET['min'],$_GET['max']),
                'length' => 1,
        ]);

    }
?>

