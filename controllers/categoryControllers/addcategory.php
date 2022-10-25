<?php
include('../categoryController.php');
$name = $_REQUEST['name'];
$desc = $_REQUEST['desc']; 
$imge = $_REQUEST['imge'];
$requests =['name' => $name , 'description' => $desc ,'image' => $imge];
$index ->validation($requests);
if($index ->validation($requests) == "false"){
    $error =" Pleaze Check Your Data ";
    echo $error;
}else{
    $index ->stor($requests);
    header('Location:../../views/catAdmin.php');
}






