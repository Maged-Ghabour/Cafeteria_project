<?php

include('../categoryController.php');
$name = $_REQUEST['name'];
$desc = $_REQUEST['desc'];
$imge = $_REQUEST['imge'];
$ID   = $_REQUEST['ID'];
$resultupdate = $index -> update($ID,['name' => $name , 'description' => $desc ,'image' => $imge]);



header('Location:../../views/catAdmin.php');
?>