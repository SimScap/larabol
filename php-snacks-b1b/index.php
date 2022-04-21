<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snacks b1b</title>
</head>
<body>

    <h1>PHP Snacks b1B</h1>
    <h3>Quinto snack:</h3>

    <?php
        $paragraph = "I wish I could still teach easily, but not having a speaking voice makes that challenging. The last class I taught was a one-off when an ALS researcher, a neuroscientist I met on Twitter, asked me to speak to her PhD students in a class called “Finding Your Voice as a Scientist.” My speech was already seriously compromised then, but the students were prepared for that, and I knew I had things to tell them that they would find useful. We all hung in there, and I am grateful to those students for making the effort to understand my speech, for appreciating what I had to say, and for making me feel that I belonged there. I don’t know exactly what they took away from that class, but I learned about the importance of showing up and trying, no matter what.

        The teaching profession is not highly valued in our culture. Perhaps full professors at esteemed universities who are called upon to pontificate on TV news shows are accorded some esteem, but the multitude of teachers at lower grade levels, and even those at the university, are often regarded with the adage in mind, If you can’t do, teach.";

        $paragraphs = explode('.', $paragraph);
        // var_dump($paragraphs)

    ?>

    <div>
    <?php for($i = 0; $i < count($paragraphs); $i++) {?>
        <p>
            <?php echo $paragraphs[$i]; ?>
        </p>
    <?php } ?>
    </div>

    <hr>

    <h3>Sesto snack:</h3>
    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ],
            [
                'name' => 'Federica',
                'lastname' => 'Giannini'
            ]
        ]
    ];

    $keys = array_keys($db);
    $values = array_values($db);

    // # ciclo per ogni valore presente nel $db
    for ($index = 0 ; $index < count($values); $index ++){
        // var_dump(array_values($db)[$index]);

        if ($keys[$index] == 'teachers') {
            echo '<h5>Teachers</h5>';
            for ($teacherIndex = 0 ; $teacherIndex < count( $values[$index]) ; $teacherIndex++){
                $teacher = $values[$index][$teacherIndex];
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
            }
        } else if ($keys[$index] == 'pm') {
            echo '<h5>PM</h5>';
            for ($pmIndex = 0 ; $pmIndex < count( $values[$index]) ; $pmIndex++){
                $pm = $values[$index][$pmIndex];
                echo $pm['name'] . ' ' . $pm['lastname'] . '<br>';
            }

        }
    }
    ?>

    <h1>Esempio strpos:</h1>
    <?php
    $stringa = "ciao siamo classe 55";

    // ? 0 !== false || 0 == false
    if ( strpos($stringa, "ciao") === false ){
        // echo strpos($stringa, "ciao");
        echo 'La stringa ciao non è presente';
    } else {
        // echo strpos($stringa, "ciao");
        echo 'La stringa ciao è presente';
    } ?>






</body>
</html>
