 <html>
    <a href="../views/addUser.php">Back To Add User</a> <br><br>
  </html>
  <style>
  body{
    text-align : center ;
  }
 a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 1px solid black;
  border-radius : 3px ;
  position: relative;
  top: 200px;

  
}

  </style> 

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
  
  // header('Location: ' . $_SERVER['HTTP_REFERER']);
  
  echo '<script>alert("Password does not match")</script>';

  
 // echo "<h1 style='color:black;text-align:center;font-weight: bold;'> Password does not Match </h1>";
  



}
if (empty($name) && empty($email) && empty($password) && empty($confirm)) {
  echo "please insert the empty fields . <br>";
}

if ($password === $confirm && !empty($name) &&  !empty($email) &&  !empty($password) &&  !empty($confirm)) {
  $hash = md5($password);
  global $conn;
  $conn->query("INSERT INTO users ( name , email , password , phone , room_id) 
    VALUES ('$name' , '$email' , '$hash' , $phone  , $room)
    ");
  header("Location: ../views/allUsers.php");
}


// $row = $test->fetch_assoc();
// echo "<pre>";
// print_r($row);
