<?php

    // ? Come creare una costante in PHP - funzione define()

    define('DB_SERVERNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_DATABASE_NAME', 'uni_55');

    $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mysqli</title>
</head>
<body>
    <h1>PHP MySQLi examples</h1>
    <pre> <?php echo $_GET['name']; ?>
    </pre>
    <p>
        <?php

            // § se la connessione è stata effettuata ed ho ricevuto un errore allora
            if ( $connection && $connection->connect_error){
                echo "CONNECTION FAILED --- " . $connection->connect_error;
            } else if (true)
            $name = $_GET['name'];

            $sqlQuery = "SELECT * FROM `students` WHERE YEAR(`date_of_birth`) < $name ";
            $students = $connection->query($sqlQuery);

            if ($students && $students->num_rows > 0){
                while($row = $students->fetch_assoc()){
                    echo $row['name'] . ', ';
                    // var_dump($row);
                }
            } else if ($students) {
                echo "Nessuno studente trovato";
            } else {
                echo "Query non valida";
            }


            // $sqlInj = "20; INSERT INTO `students` (`id`, `degree_id`, `name`, `surname`, `date_of_birth`, `fiscal_code`, `enrolment_date`, `registration_number`, `email`) VALUES (5422, 2, 'Giampeppe', 'Bianchi', '2055-04-01', 'FATTLAFFARTUOI', '2010-02-01', '1512414512', 'nonteladico@gmail.com')";
            // $connection->query($sqlInj);

            // prepare and bind
        ?>

    </p>
    <p>
        <?php

            $stmt = $connection->prepare("INSERT INTO `exams` (`id`, `course_id`, `date`, `hour`, `location`, `address`) VALUES (NULL, ?, ?, ?, ?, ?)");
            // $connection->query($sqlInj)")
            $stmt->bind_param("issss", $course_id, $date, $hour, $location, $address);

            // set parameters and execute
            $course_id = 44;
            $date = "2020-01-02";
            $hour = "16:22:10";
            $location = "Colosseo";
            $address = "Piazza del Colosseo, Roma";

            $stmt->execute();
            $risultato = $stmt->get_result();
            echo " --- ";
            echo $risultato;
            echo " --- ";

            $connection->close();
            // # equivalente in js => connection.close()
         ?>

    </p>
</body>
</html>
