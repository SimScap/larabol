<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php foreach</title>
    <style>
        .red{
            color: magenta;
        }

        .green{
            color: lime;
        }
    </style>
</head>
<body>

    <h1>PHP Foreach Livecoding GET</h1>
    <p>
        <?php
            // var_dump($_GET);
            foreach ($_GET as $key => $value){
                echo $key . ': ' . $value . '<br>';
            }
        ?>
    </p>


    <h1>PHP Foreach Livecoding Stringhe Colorate</h1>
    <!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”,
    altrimenti stampare una stringa rossa. -->
    <?php

    // $password = empty($_GET['password']) ? '' : $_GET['password'];

    // if ($password=='Boolean'){
    //     echo '<p class="green"> Password corretta </p>';
    // } else {
    //     echo '<p class="red"> Password errata </p>';
    // }

    // ? catturiamo il notice qualora 'password' non sia stata inserita come queryString
    if (empty($_GET['password'])){
        // ? ed emettiamo un errore su schermo
        echo '<h6 class="red"> Errore, non hai inserito nessuna password </h6>';
    } else { // # in tutti gli altri casi, ovvero qualora la password sia popolata
        if ($_GET['password']=='Boolean'){
            echo '<p class="green"> Password corretta </p>';
        } else {
            echo '<p class="red"> Password errata </p>';
        }
    }
    ?>




    <h1>PHP Foreach</h1>
    <h4>Array con indici numerici</h4>
    <p>
        <?php
            $array = array('cane', 'gatto', 'panda', 'elefante', 'criceto');

            // ? per ogni elemento dell'$array che chiamo $animale
            foreach($array as $animale){
                echo $animale . ', ';
            }

        ?>
    </p>

    <hr>
    <h4>Array associativo</h4>
    <?php
            $arrayAssociativo = array('riccardo' => 'teacher',
                            'antonio' => 'studente',
                            'paolo' => 'coordinatore',
                            'alex' => 'tutor');

            // ? per ogni chiave chiamata $chiave, e per ogni valore chiamato $valore dell'$arrayAssociativo
            foreach($arrayAssociativo as $chiave => $valore){
                echo '<em>' . $chiave . '</em> - ';
                echo  $valore . ', ';
            }

    ?>
    <hr>
    <h4>Array multidimensionale</h4>
    <?php
        $animals = [
            "mammals" => ["cow", "pig", "horse", "dog"],
            "birds" => ["duck", "chicken"]
        ];


        foreach ($animals as $animalClass) {
            foreach($animalClass as $animal) {
                echo $animal . ', ';
            }
        }

    ?>


<?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    /**
     * Creare un array di array.
     * Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
     * e come valore un array di post associati a quella data.
     * Stampare ogni data con i relativi post.
     *
     */

    ?>

    <h3>Correzione terzo snack blocco 1 con foreach</h3>

    <?php foreach($posts as $date => $postsInADay){; ?>
        <h5> <?php echo $date; ?>  </h5>
        <?php foreach($postsInADay as $post){ ?>
            <h6>
                <?php echo $post['title']; ?>
            </h6>
            <p>
                <em>
                    <?php echo $post['author']; ?>
                </em>
            </p>
            <p>
                <?php echo $post['text']; ?>
            </p>
        <?php } ?>
    <?php } ?>


</body>
</html>

