<?php


/**
 *
 *
 *
    Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
 *
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snacks b2</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>

    <h1>PHP Snacks b2</h1>
    <h3>Secondo snack b2 (inventato):</h3>
    <!-- Partendo da questa stringa
    trasforma la stringa in un array con un elemento per carattere,

        $array = ['c','i','n','q','u','e'];

    infine crea un array associativo della forma:

        $result = [
            'c' => 'c',
            'i' => 'i',
            'n' => 'n',
            'q' => 'q',
            'u' => 'u',
            'e' => 'e'
        ]; -->
    <?php
        $string = "c,i,n,q,u,e";

        // ? creo un array di stringhe "esplodendo o splittando" la stringa $string
        $arrayOfChars = explode(',', $string);
        // var_dump($arrayOfChars);

        // ? inizializzo un nuovo array
        $result = [];

        // § ciclo per ogni stringa (carattere) $char nell'array $arrayOfChars
        foreach ( $arrayOfChars as $char){
            // § e aggiungo un nuovo char sia come chiave che come valore nell'array associativo $result
            $result[$char] = $char;
            echo $char . ' => ' . $char .'<br>';
        }
        // var_dump($result);
    ?>


    <h3>Primo snack b2:</h3>
    <?php
    /**
     * Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
     *  Ad ogni refresh della pagina visualizzare una pubblicità a schermo,
     * tenendo conto che possono essere sorteggiate solo quelle is_active true.
     */

    $ads = [
        [
            'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
            'link' => 'https://www.google.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
            'link' => 'https://www.facebook.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
            'link' => 'https://codepen.io',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
            'link' => 'https://laravel.com',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
            'link' => 'https://www.php.net',
            'is_active' => false,
        ],
    ];

    $activeAds = [];

    foreach ($ads as $ad){
        if($ad['is_active']){
            $activeAds[] = $ad;
        }
    }


    $randomAd = $activeAds[rand(0, count($activeAds)-1)]
    //? Alternativa Andreozza $randomAd = $activeAds[array_rand($activeAds, 1)]

    ?>

    <a href="<?php echo $randomAd['link'];  ?>">
        <img src="<?php echo $randomAd['image_path'];?>" alt="random ad">
    </a>



    <h3>Settimo snack b1:</h3>
    <!--  -->

    <?php

    /*
        Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    */

    $students = [
        [
            'name' => 'Laura',
            'lastname' => 'Bianchi',
            'votes' => [9, 9, 9, 9, 10]
        ],
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'votes' => [8, 5, 7, 6]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'votes' => [10, 2, 4]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'votes' => [2, 8, 3, 4, 5]
        ],
        [
            'name' => 'Roberta',
            'lastname' => 'Danderini',
            'votes' => [2, 8, 9, 5, 4]
        ]
    ];
    ?>

    <ul>
        <?php foreach( $students as $student ){ ?>
            <li>
                <?php echo $student['name'] . ', ' . $student['lastname'] . ' - '; ?>
                <?php echo array_sum($student['votes']) / count($student['votes']); ?>
            </li>
        <?php } ?>

    </ul>



</body>
</html>
