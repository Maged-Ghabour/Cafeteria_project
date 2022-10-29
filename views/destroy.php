<?php
include('../includes/session.php');
include('../controllers/DBController.php');
include('../controllers/UserController.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = new User();
    $user = $user->destroy($id);
    header('location:allUsers.php');
}
