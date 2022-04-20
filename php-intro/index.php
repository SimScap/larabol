<?php
    $name = "Leonardo Di Svevia Di Capra";
    $array = ['ciao', 'io','sono', 'un', 'array'];
    echo $array;
?>

<?php
    var_dump( explode(' ', $name));
    var_dump( str_replace( 'sono', 'ero', implode(' ', $array)  ) );
    var_dump( "leo");
    var_dump( ucfirst("eo"));
?>
