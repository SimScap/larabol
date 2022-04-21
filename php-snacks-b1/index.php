<?php
    /**
     * Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */

    $matches =  [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ]
    ];

    /**
     * Secondo snack
     *
     *  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * - name sia più lungo di 3 caratteri,
     * - che mail contenga un punto e una chiocciola e
     * - che age sia un numero.
     *
     *  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     */

     /**
      * Terzo snack:
      *
      * Creare un array di array.
      * Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
      * e come valore un array di post associati a quella data.
      * Stampare ogni data con i relativi post.

        Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

      */

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snacks b1</title>
</head>
<body>

    <h1>PHP Snacks b1</h1>
    <h3>Primo snack:</h3>
    <ul>
        <?php for ($i = 0 ; $i < count($matches) ; $i++) { ?>
            <li> <?php echo $matches[$i]['team1'] . ' - ' . $matches[$i]['team2']; ?> |
            <?php echo $matches[$i]['point_team_1'] . '-' . $matches[$i]['point_team_2']; ?></li>
        <?php } ?>
    </ul>
    <hr>

    <h3>Secondo snack:</h3>
    <p>
        <?php
            // ? dobbiamo ancora correggere 0, perché se è all'inizio strpos darà 0 ==> booleano

            $params = $_GET;
            var_dump($params);
            if ( (strlen($params['name']) > 3)
            && ( strpos($params['mail'], '@')
            && strpos($params['mail'], '.'))
            && ( is_numeric($params['age']) )  ){
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        ?>
    </p>

    <h3>Terzo snack:</h3>
    <ul>
        <?php
            // § mi sono salvato tutti i valori dell'array associativo di post in $postsValues
            $postsValues = array_values($posts);

            // § mi sono salvato tutte le chiavi dell'array associativo di post in $postsKeys
            $postsKeys = array_keys($posts);

            // # ciclo per ogni coppia chiave => valore nell'array associativo di post ($posts)
            for ( $i = 0 ; $i < count($postsKeys) ; $i++){;?>

                <!-- // # Scrivo la data relativa ai post in tale data -->
                <h4>Post in data: <?php echo $postsKeys[$i]; ?></h4>

                <!-- // ? ciclo per ogni valore presente tra i post di quella specifica data -->
                <?php for ( $postIndex = 0 ; $postIndex < count($postsValues[$i]) ; $postIndex++){ ?>
                    <h5>
                        <?php echo $postsValues[$i][$postIndex]['title']; ?>
                    </h5>
                    <p>
                        <em><?php echo $postsValues[$i][$postIndex]['author']; ?></em>
                    </p>
                    <p>
                        <?php echo $postsValues[$i][$postIndex]['text']; ?>
                    </p>

                <?php } ?> <!-- //? chiusura secondo ciclo for -->

            <?php } ?> <!-- // #chiusura primo ciclo for -->

    </ul>

</body>
</html>
