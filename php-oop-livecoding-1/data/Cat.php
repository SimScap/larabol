<?php
class Cat {
    public $name;
    public $age;
    public $race;
    public $colour;

    function __construct($_name, $_age, $_race, $_colour){
        $this->name = $_name;
        $this->age = $_age;
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