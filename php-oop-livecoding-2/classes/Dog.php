<?php
include_once __DIR__ . "/Animal.php";

class Dog extends Animal {
    protected $name;
    protected $race;
    protected $colour;
    protected $size;

    function __construct($name, $race, $colour, $size, $scientificName, $gender, $birthYear, $isEndangered){
        parent::__construct($scientificName, $gender, $birthYear, $isEndangered);
        if (is_numeric($name)){
            throw new Exception('ERROR 23FB: Il nome di un cane non può essere numerico', 8772);
        }
        $this->name = $name;

        $this->race = $race;
        $this->colour = $colour;
        $this->size = $size;
    }

    public function getName(){
        return ucfirst($this->name);
    }
}

?>
