<?php
include_once __DIR__ . "/Animal.php";

/**
 * A class that models a Cat
 */
class Cat extends Animal {
    protected $name;
    protected $race;
    protected $colour;

    function __construct($_name, $_race, $_colour, $scientificName, $gender, $birthYear, $isEndangered){
        parent::__construct($scientificName, $gender, $birthYear, $isEndangered);
        $this->name = $_name;
        $this->race = $_race;
        $this->colour = $_colour;
    }

    public function miao(){
        echo 'MIAO!';
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    public function getColour(){
        return $this->colour;
    }
}