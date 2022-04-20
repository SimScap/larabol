<?php
/**
   * Controlliamo che la mail passata in GET sia ben formata e contenga:
   *    -   un punto
   *    -   una chiocciola
   *
   * Se è corretta stampiamo un div che contenga "OK", altrimenti che contenga "KO"
   */
?>

<?php
    // # Array "classici" => ovvero che dispongono di una struttura indice => valore
    $array = [
        'Valore1',
        'Valore2',
        'Valore3'
    ];

    // # Aggiunta di un nuovo elemento con indice automaticamente calcolato ad un array
    $array[] = "Valore4";

    // # Modifica di un elemento esistente all'indice statico selezionato in un array
    $array[0] = "ValoreX";


    // § Array associativo => ovvero che dispongono di una struttura chiave => valore
    $nominalArray = [
        'name'      => 'Vittoria',
        'last-name' => 'Portanti',
        'age'       => '44'
    ];

    // § Aggiunta di un nuovo elemento con chiave statica ad un array associativo
    $nominalArray['nationality'] = "British";

    // § Modifica di un elemento esistente alla chiave statica selezionata in un array associativo
    $nominalArray['name'] = "Marco";


$team = [ // primo livello: array "contenitore" con indici numerici
            [ // secondi livelli: array associtativi
                "name" => "Fabio",
                "lastname" => "Forghieri",
                "role" => "Co-Founder",
            ],

            [
                "name" => "Michele",
                "lastname" => "Papagni",
                "role" => "Head of Teaching",
            ]
        ];


        /**
         *  Esercizio:
         * - inserisco una serie di parole in un array
         * - controllo che la parola data sia presente nell'array
         */

        $words = [
            'ciao',
            'gatto',
            'arrotino',
            'pilotessa',
            'sindaco',
            'presidentessa',
            'ghepardo',
            'olifante',
            'bulbasaur'
        ];

        $needle = $_GET['needle'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Check</title>
</head>
<body>
    <h1>Array</h1>
    <p>
        <?php
            var_dump(in_array($needle, $words));
            echo rand(0, 143);
        ?>

    </p>

</body>
</html>
