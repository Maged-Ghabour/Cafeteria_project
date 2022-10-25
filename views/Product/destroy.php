<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/ProductController.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = new Product();
    $product = $product->destroy($id);
    header('location:index.php');
}
