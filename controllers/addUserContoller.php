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

// get information about the image 
$file_path_info = pathinfo($file_name);
$extension = $file_path_info['extension'];
$new_img_name = uniqid() . '.' . $extension;
$destenation = "../uploads/" . $new_img_name;
move_uploaded_file($file_tmp_name, $destenation);

if ($password !== $confirm) {
  echo "password dont match";
}
if (empty($name) && empty($email) && empty($password) && empty($confirm)) {
  echo "please insert the empty fields . <br>";
}

if ($password === $confirm && !empty($name) &&  !empty($email) &&  !empty($password) &&  !empty($confirm)) {
  global $conn;
  $conn->query("INSERT INTO users ( name , email , password , phone , room_id, `image`) 
    VALUES ('$name' , '$email' , '$password' , $phone  , $room, $new_img_name)
    ");
  header("Location: ../views/allUsers.php");
}


// $row = $test->fetch_assoc();
// echo "<pre>";
// print_r($row);
