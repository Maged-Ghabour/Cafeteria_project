<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Cafeteria Project</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon" />
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../assets/css/main.css" rel="stylesheet" />
</head>
<?php
include('../../includes/session.php');
include('../../includes/navbar.php');
?>
<!-- include database -->
<?php
include('../../controllers/DBController.php');
include('../../controllers/ProductController.php');

$products = new Product();
$products = $products->index();

?>
<!-- Start Main  -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Sample Inner Page</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>All Products</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section class="sample-page">
        <div class="container data-aos='fade-up'">

            <?php

            if (isset($_SESSION['is_admin'])) {
                if ($_SESSION['is_admin'] == 1) { ?>
                    <a href="create.php" title="create" class="btn btn-primary text-white btn-sm">
                        <i class="fas fa-plus"></i> Add New Product
                    </a>

            <?php }
            } ?>

            <div class="row">
                <!-- CURD Product  -->
                <?php if ($products != null)
                    foreach ($products as $product) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="../../uploads/<?php echo $product['image']; ?>" class="w-100">
                            <div class="card-body bg-light">
                                <h3 class="card-title text-center">
                                    <?php echo $product['name'];  ?>
                                </h3>
                                <p class="text-center">
                                    <strong>Catgeory: </strong>
                                    <?php echo $product['category_name'];  ?>
                                </p>

                                <p class="text-center">
                                    <strong>Price: </strong>
                                    <?php echo $product['price'];  ?>
                                </p>

                                <div class="d-flex justify-content-center mt-4">
                                    <div>
                                        <a href="show.php?id=<?php echo $product['id']; ?>" title="show" class="btn btn-info text-white btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <?php if (isset($_SESSION['is_admin'])) {
                                            if ($_SESSION['is_admin'] == 1) { ?>
                                                <a href="edit.php?id=<?php echo $product['id']; ?>" title="edit" class="btn btn-success text-white btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="destroy.php?id=<?php echo $product['id']; ?>" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure You Want To Delete This Product ?') ;">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                else { ?>
                    <div class="d-flex justify-content-center align-items-center">
                        <h5 class="text-danger">No Products Found </h5>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->

<!-- Includes Footer and scripts -->
<?php
include('../../includes/footer.php');
?>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>

</html>