<?php


require_once "DBController.php";

    
?>

<?php 
class addUser extends Db{
     private $room_id;
     private $name;
     private $email; 
     private $pass; 
     private $rep_pass; 
     private $phone;
     private $image ;
   


     public function __construct($room_id , $name , $email , $pass , $rep_pass , $phone , $image)
     {
        $this->room_id = $room_id; 
        $this->name = $name; 
        $this->email = $email; 
        $this->pass = $pass; 
        $this->rep_pass = $rep_pass;
        $this->phone = $phone;
        $this->image = $image;
     }
     

     private function emptyInput(){
        $result = false; 
        if(  empty($this->room_id) || empty($this->name) || empty($this->pass) || empty($this->rep_pass) || empty($this->phone) || empty($this->image)   ){
            $result =  false;
        }else{
            $result = true;
        }
        return $result;
     }

     private function invalidName(){
        $result = false;
        if(!preg_match("/^[a-z A-Z0-9]*/" , $this->name)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
     }

     private function invalidEmail(){
        $result = false;
        if(!filter_var($this->email , FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
     }


     private function passMatch(){
        $result = false;
        if($this->pass != $this -> rep_pass){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
     }
   

    private function addUser(){
        

        if($this->passMatch() && $this->invalidEmail() && $this->invalidName() && $this->emptyInput()){

            $sql = "INSERT INTO users (name,room_id ,  email, password , phone , code , image)
            VALUES ($this->name, 1 ,  $this->email' , md5($this->pass) , 01004200 , 1 , $this->image)";
            
            if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            }
            
            
    }
     

}
}



// $addUser = new addUser($_POST["room"] , $_POST["name"] , $_POST["email"] , $_POST["password"] , $_POST["cpassword"] , $_FILES["profile"] , $_POST["phone"]); 
// $addUser->addUser();





