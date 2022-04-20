<?php

    /*
        Descrizione:

        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */

    // § inizializzo una nuova variabile di tipo stringa che si chiama $paragrafo
    $paragrafo =  "Se dal punto di vista meccanico le due vetture sono pressoché identiche, quello che cambia in maniera sostanziale sono la carrozzeria e i pesi, con inevitabile ricaduta sulla dinamica di guida. La Ferrari 296 GTB, infatti, è dotata di un tetto retrattile rigido che garantisce grande comfort di bordo.";

    if (!empty($_GET['parolaccia'])){
        $paragrafoCensurato = str_replace( $_GET['parolaccia'], "***", $paragrafo);
    } else {
        $paragrafoCensurato = $paragrafo;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>
        Paragrafo:
    </h1>
    <p>
        <?php echo $paragrafo; ?>
    </p>
    <pre>
        Lunghezza del paragrafo:
                    <?php echo strlen($paragrafo); ?> caratteri
    </pre>

    <h1>
        Paragrafo censurato:
    </h1>
    <p>
        <?php echo $paragrafoCensurato; ?>
    </p>
    <pre>
        Lunghezza del paragrafo censurato:
                    <?php echo strlen($paragrafoCensurato); ?> caratteri
    </pre>
</body>
</html>
