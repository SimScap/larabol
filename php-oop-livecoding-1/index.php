<?php
    include('./data/User.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    <h1>OOP 1</h1>

    <div class="container">
        <?php
            $utenteAlex = new User('Alex', 'Alberio', 'iosonobellissimoalex@gmail.com', 'alexIlBello222');

            $utenteEkaterina = new User('Ekaterina', 'Prokopenko', 'supercapellirossieka@gmail.com', 'ekaterinaDaiCapelliRossi');

            // $utenteAlex->firstName = 412412512;

            var_dump($utenteAlex, $utenteEkaterina);
        ?>
    </div>

</body>
</html>