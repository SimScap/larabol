<?php

class Genre{
    protected $name;
    protected $adult;

    function __construct(string $name, bool $adult = false){
        $this->name = $name;
        $this->adult = $adult;
    }

    public function getName(){
        return $this->name;
    }

    public function isAdultGenre(){
        return $this->adult;
    }

}
