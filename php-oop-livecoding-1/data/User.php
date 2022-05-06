<?php

/**
 * Single forum user's class
 */
class User{
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $userName;
    protected $age;

    /**
     * Constructor for the single forum user.
     *
     * @param $_firstName First name of the created user
     * @param $_lastName Last name of the created user
     * @param $_email Email address of the created user
     * @param $_userName Username of the created user
     * @param $_age Optional: age of the created user
     */
    function __construct($_firstName, $_lastName, $_email, $_userName, $_age = null ){
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->email = $_email;
        $this->userName = $_userName;
        $this->age = $_age;
    }

    private function setFirstName($_firstName){
        if($_firstName != null &&  ctype_alpha($_firstName)){
            $this->firstName = $_firstName;
        }
    }

    public function setLastName($_lastName){
        if($_lastName != null &&  ctype_alpha($_lastName)){
            $this->lastName = $_lastName ;
        }
    }

    public function setEmail($_email){
        if(!strpos($_email, "@") === false
        && strpos($_email, ".") > strpos($_email, "@") + 1 ){
            $this->email = $_email;
        }
    }

    public function setUserName($_userName){
        $this->userName = $_userName;
    }

    public function setAge($_age){
        if(is_int(intval($_age))){
            $this->age = intval($_age);
        }
    }

}


?>
