<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/ProductController.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id  = $_POST['category_id'];

    $newProdcut = new Product();
    $newProdcut->update($_SESSION['id'], $name, $price, $category_id);
    header('location: index.php');
} else {
    header('location:../../index.php');
}
