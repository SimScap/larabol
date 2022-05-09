<?php
    include_once __DIR__ . "/classes/Animal.php";
    include_once __DIR__ . "/classes/Cat.php";
    include_once __DIR__ . "/classes/Dog.php";

    // ? public: visibili e utilizzabili sia dall'interno che dall'esterno della classe in cui sono stati definiti.

    // § protected: visibili e utilizzabili dall'interno della classe che li definisce o di uno dei suoi discendenti (ancestors).

    // # private: visibili e utilizzabili esclusivamente dall'interno della classe che li definisce.

    $fido = new Cat("fido", "persiano", "rosso", "gatto domestico", "M", 2008, false );
    var_dump($fido);

    $pina = new Animal("talpa europea", 'F', 2002, true);
    var_dump($pina);

    try{
        $fuffi = new Dog('123123', 'pastore maremmano', 'bianco', 'cammello', 'cane domestico', 'M', 2015, false);
        var_dump($fuffi);
    } catch (Exception $e) {
        echo "Impossibile creare una nuova istanza di tipo Dog, perché ". $e->getMessage();
    }

    // echo $fuffi->getName();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Livecoding 2</title>
</head>
<body>
    <h1>Visibilità:</h1>
    <p>
        <strong> public: </strong> visibili e utilizzabili sia dall'interno che dall'esterno della classe in cui sono stati definiti.
    </p>
    <p>
        <strong> protected: </strong> visibili e utilizzabili dall'interno della classe che li definisce o di uno dei suoi discendenti (ancestors).
    </p>
    <p>
        <strong> private: </strong> visibili e utilizzabili esclusivamente dall'interno della classe che li definisce.
    </p>

    <h4> Quanti anni ha fido? </h4>
    <p>
        <?php echo $fido->getAge(); ?>
    </p>

</body>
</html>