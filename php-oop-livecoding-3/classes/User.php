<?php
include_once __DIR__ . "/CreditCard.php";
include_once __DIR__ . "/Imageable.php";

class User{
    use Imageable;

    protected $firstName;
    protected $lastName;
    protected $birthDate;
    protected $username;
    protected $email;
    protected $creditCard;

    public function __construct($firstName, $lastName, $birthDate, $username, $email, CreditCard $creditCard = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->username = $username;
        $this->email = $email;
        $this->creditCard = $creditCard;
    }

    public function setCreditCard(CreditCard $creditCard){
        $this->creditCard = $creditCard;
    }

    public function getName(){
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getBirthDate(){
        return $this->birthDate;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }
}

; ?>
