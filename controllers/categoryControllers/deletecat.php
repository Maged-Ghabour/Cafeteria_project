<?php

include('../categoryController.php');
$id = $_REQUEST['id'];
$index ->destroy($id);
header('Location:../../views/catAdmin.php');