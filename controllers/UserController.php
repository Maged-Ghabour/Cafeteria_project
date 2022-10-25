<?php 

require_once "DBConntroller.php";
class User {

    // Get All users 
   public function getAll(){
    global $conn;
    $query  = "SELECT * FROM users";
    $result = $conn->query($query);

    $users = [];

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            array_push($users , $row);
        }
    }
    return $users;
   }

     
   // Get One User 
   public function getOne($id){
    global $conn;
    $query = "SELECT * FROM users 
              WHERE id = '$id' ";
    $result = $conn->query($query);

    $user = null;

    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
    }
    return $user;
   }

   // Create new User 

   public function store(array $data){
    global $conn;
    $query = "INSERT INTO users (`id_room` , `name` , `email`, `password` , `phone` , `code` , `image`)
        VALUES ('{$data['id_room']}' , '{$data['name']}' , '{$data['email']}' , '{$data['password']}' , '{$data['phone']}' , '{$data['code']}' , '{$data['image']}'  )";

        $result = $conn->query($query);

        if($result == true){
            return true;
        }
        return false;


   }


   // update user 

     // Create new User 

     public function update($id , array $data){
        global $conn;
        $query = "UPDATE users SET 
            `room_id` = '{$data['room_id']}',
            `name` = '{$data['name']}',
            `email` = '{$data['email']}',
            `password` = '{$data['password']}',
            `phone` = '{$data['phone']}',
            `image` = '{$data['image']}'
             Where 'id' = $id " ;
             

           
    
            $result = $conn->query($query);
    
            if($result == true){
                return true;
            }
            return false;
    
    
       }


   //Delete 

   public function delete($id){

    $query = "DELETE FROM users 
              WHERE id = '$id' ";

    $result = $this->connect()->query($query); 
    if($result == true){
        return true;
    }
    return false;
   }
    


}
     
