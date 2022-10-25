<?php 

namespace validation;

require_once "validationInterface.php" ; 

class Min implements validationInterface{

    private $name; 
    private $value;
    public function __construct($name , $value)
    {
        $this->name = $name ; 
        $this->value = $value;
    }

    public function validate()
    {
        if(strlen($this->value) >= 5  ){
            return "This $this->name must be > 5";
        }

        return "";
    }
}

