<?php


require "DBController.php";



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['cpassword'];
$room = $_POST['room'];
$phone = $_POST['phone'];

$files = $_FILES['image'];
$file_name = $files['name'];
$file_type = $files['type'];
$file_tmp_name = $files['tmp_name'];


if ($password !== $confirm) {
  echo "password dont match";
}
if (empty($name) && empty($email) && empty($password) && empty($confirm)) {
  echo "please insert the empty fields . <br>";
}

if ($password === $confirm && !empty($name) &&  !empty($email) &&  !empty($password) &&  !empty($confirm)) {
  global $conn;
  $conn->query("INSERT INTO users ( name , email , password , phone , room_id) 
    VALUES ('$name' , '$email' , '$password' , $phone  , $room)
    ");
  header("Location: ../views/allUsers.php");
}


// $row = $test->fetch_assoc();
// echo "<pre>";
// print_r($row);
