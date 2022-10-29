<?php 


session_start();
require_once "../controllers/loginController.php";
require_once "../validation/Validator.php";


use validation\Validator;


if (isset($_POST["submit"])){



    $email = $_POST["email"];
    $password = $_POST["password"];

   
    $v = new Validator; 
    $v->rules("email" , $email , ["required" , "email"]);
    $v->rules("password" , $password , ["required"]);
    $errors = $v->errors;

  
    
    // if data is Valid 

    if($errors == []){
       
        $user = new Login; 
        
        $result = $user->attempt($email , $password);
     

        // if Stored Successfully
        if ($result !== null){
            $_SESSION["id"] = $result["id"];
            $_SESSION["name"] = $result["name"];
            $_SESSION["is_admin"] = $result["is_admin"];
           
         
            header("location:../index.php");
    
        } else{
            $_SESSION["errors"] = ["Your Credentails are not correct"];
            header("location:../views/login.php");  
        }

    
    }else{ 
        
       
        $_SESSION["errors"] = $errors;
        header("location:../views/login.php");  
    }
}else{
   
    header("location:../views/login.php");  
}
