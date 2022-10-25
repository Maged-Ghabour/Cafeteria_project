<?php 

namespace validation;

include_once "ValidationInterface.php" ; 
include_once "Email.php" ; 
include_once "Numeric.php" ; 
include_once "Str.php" ; 
include_once "Min.php" ; 
include_once "Required.php" ; 




class Validator{
    public  $errors = []; 
    private function makeValidation(validationInterface $v){
        return $v->validate();
    }
    public function rules($name , $value , array $rules){

        foreach ($rules as $rule){
            if($rule == "required"){
                $error = $this -> makeValidation(new Required($name , $value));
            }else if ($rule == "string"){
                $error = $this -> makeValidation(new Str($name , $value));
            }else if ($rule == "email"){
                $error = $this -> makeValidation(new Email($name , $value));
            }else if ($rule == "numeric"){
                $error = $this -> makeValidation(new Numeric($name , $value));
            }else if ($rule == "min"){
                $error = $this -> makeValidation(new Min($name , $value));
            }else{
                $error = "";
            }

            if($error !== ""){

                array_push($this->errors , $error);
            }
        }

    }
}

