
<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <h3>For</h3>
    <p>
        <?php

            // § Ciclo for in php, unica differenza = $i
            for ($i = 0 ; $i <= 10 ; $i++){
                echo $i . ' ';
            }
        ?>
    </p>

    <h3>While</h3>
    <p>
        <?php

            // § Ciclo while in php, unica differenza = $index
            $index = 0;
            while ($index <= 14){
                echo $index . ' ';
                $index++;
            }
        ?>
    </p>

    <h3>For in array</h3>
    <ul>
        <?php
            for ($elementIndex = 0; $elementIndex < count($words) ; $elementIndex++ ){
                echo '<li>'. $words[$elementIndex] .'</li>';
            }
        ?>
    </ul>

    <pre>
        <?php var_dump($words); ?>
    </pre>

</body>
</html>
