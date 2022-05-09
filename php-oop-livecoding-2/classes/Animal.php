<?php

/**
 * A class for any animal.
 */
class Animal{
    protected $scientificName;
    protected $gender;
    protected $birthYear;
    protected $isEndangered;

    /**
     * Creates a new Animal instance.
     *
     * @param string $scientificName the animal's scientific name
     * @param string $gender the gender of the current animal instance
     * @param int $birthYear the year of birth of the current animal instance
     * @param bool $isEndangered the endangered status of the current animal instance
     */
    function __construct(string $scientificName, string $gender,int $birthYear, bool $isEndangered){
        $this->scientificName = $scientificName;
        $this->gender = $gender;
        $this->birthYear = $birthYear;
        $this->isEndangered = $isEndangered;
    }

    public function getScientificName() {
        return $this->scientificName;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getBirthYear() {
        return $this->birthYear;
    }

    public function getIsEndangered() {
        return $this->isEndangered;
    }

    public function getAge(){
        return 2022 - intval($this->birthYear);
    }
}


?>
