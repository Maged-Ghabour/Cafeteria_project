<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/CategoryController.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = new Category();
    $category = $category->destroy($id);
    header('location:index.php');
}
