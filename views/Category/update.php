<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/CategoryController.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $newCategory = new Category();
    $newCategory->update($_SESSION['id'], $name, $description);
    header('location: index.php');
} else {
    header('location:../../index.php');
}
