<?php 

namespace validation;

require_once "validationInterface.php" ; 

class Email implements validationInterface{

    private $name; 
    private $value;
    public function __construct($name , $value)
    {
        $this->name = $name ; 
        $this->value = $value;
    }

    public function validate()
    {
        if(!filter_var($this->value , FILTER_VALIDATE_EMAIL) ){
            return "This $this->name is Not valid Email";
        }

        return "";
    }
}

