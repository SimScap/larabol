<?php
    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/User.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/CreditCard.php";

    $cart = [
        new Product("XG 65'' UltraHD", 499.99, "Un fantastico schermo a 65 pollici in Ultra HD."),
        new Product("Computer di Vittorio", 6599.99, "Un computer creato in data sconosciuta"),
        new Product("Credenza Dabijù", 1199.99, "Credenza fatta a mano dal famosissimo falegname Cascone"),
        new Product("Fotografia di Canide", 199.99, "Fotografia di un simpatico canide con papillion"),
        new Food("giugno-agosto", "water, sugar", "2 months", 3.5, "Anguria", 9.99, "Anguria coltivata in mezzo ai campi in ciocaria con aggiunta di titanio arricchito"),
        new Food("settembre-gennaio", "water, sugar", "2 weeks", 1.0,"Mela Pink Sir", 2.99, "Le mele più buone e gentili che ci siano"),
    ];

    $admin = new User("Gianna", "Sosteneva", "1965/01/30", "giannasost", "giannasost@gmail.com");
    $admin->setSource("https://picsum.photos/450");
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

    <div class="container">
        <h3>Prodotti:</h3>
        <?php foreach($cart as $item){
            $item->setSource('https://picsum.photos/450');
            ?>
            <p>
                <?php echo $item->getName();?>
                <?php if ($item instanceof Food ) {
                    echo "Un cibo biologico, con ingredienti: " . $item->getIngredients();
                }; ?>
            </p>
            <img src="<?= $item->getSource() ?>" alt="">

        <?php } ?>

        <p>
            <?php
            echo $admin->getName(). " </br>";
            var_dump($admin);
            ?>
            <img src="<?= $admin->getSource() ?>" alt="">

        </p>
    </div>

</body>
</html>
