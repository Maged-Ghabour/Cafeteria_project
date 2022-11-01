<?php


include('../includes/session.php');
include('../controllers/DBController.php');
include('../controllers/UserController.php');

// ($id, $name,  $room_id, $email, $password , $phone , $image)

if (isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $room_id  = $_POST['room_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone  = $_POST['phone'];
    $image  = "1.png";
   

    $newUser = new User();
    $hash = md5($password);
 
    
    $newUser->update($_SESSION['id'], $name , $room_id , $email, $hash  ,$phone, $image);
    header('location: allUsers.php');
} else {
    header('location: allUsers.php');
}
