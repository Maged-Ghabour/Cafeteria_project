<?php 

include "controllers/UserController.php";

$users = new User;

var_dump($users->getAll()); 
 
