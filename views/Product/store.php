<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/ProductController.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id  = $_POST['category_id'];
    $files = $_FILES['image'];

    $file_name = $files['name'];
    $file_type = $files['type'];
    $file_tmp_name = $files['tmp_name'];
    $file_error = $files['error'];
    $file_size = $files['size'];

    // get information about the image 
    $file_path_info = pathinfo($file_name);

    $extension = $file_path_info['extension'];

    $new_img_name = uniqid() . '.' . $extension;

    $destenation = "../../uploads/" . $new_img_name;

    move_uploaded_file($file_tmp_name, $destenation);

    $newProdcut = new Product();
    $newProdcut->store($name, $price, $new_img_name, $category_id);
    header('location: index.php');
} else {
    header('location:../../index.php');
}
