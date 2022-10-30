<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/CategoryController.php');
include('../../controllers/ValidatorController.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $files = $_FILES['image'];

    $file_name = $files['name'];
    $file_type = $files['type'];
    $file_tmp_name = $files['tmp_name'];
    $file_error = $files['error'];
    $file_size = $files['size'];

    // get information about the image 
    $file_path_info = pathinfo($file_name);
    $extension = $file_path_info['extension'];

    $validator = new Validator();
    $name = $validator->name($name);
    $img_upload = $validator->image($file_name, $file_error, $extension);

    $errors = $validator->errors;
    if ($errors !== []) {
        $_SESSION['errors'] = $errors;
        header('location:create.php');
    } else {
        $new_img_name = uniqid() . '.' . $extension;

        $destenation = "../../uploads/" . $new_img_name;

        move_uploaded_file($file_tmp_name, $destenation);

        $newCategory = new Category();
        $newCategory->store($name, $description, $new_img_name);
        header('location: index.php');
    }
} else {
    header('location:../../index.php');
}
