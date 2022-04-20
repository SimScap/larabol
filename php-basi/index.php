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
    $email = $_GET['email'];

    /** Alternativa Giordana
    if (strpos($email, "@") && strpos($email, ".") ){
        $result =  "ok";
    } else {
        $result = 'ko';
    }
    */
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
    <h1>ADVANCED Mail Check</h1>
    <div>
        <?php
            if (strpos($email, "@") && strpos($email, ".") ){
                echo "ok";
            } else {
                echo 'ko';
            }
        ?>

    </div>

</body>
</html>
