<?php

class CreditCard{
    protected $number;
    protected $expirationDate;
    protected $securityCode;

    public function __construct($number, $expirationDate, $securityCode)
    {
        $this->number = $number;
        $this->expirationDate = $expirationDate;
        $this->securityCode = $securityCode;
    }

    public function  getNumber(){
        return $this->number;
    }

    public function  getExpirationDate(){
        return $this->expirationDate;
    }

    public function  getSecurityCode(){
        return $this->securityCode;
    }
}?>
