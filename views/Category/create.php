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
    <link href="../../assets/css/main.css" rel="stylesheet" />
</head>
<!-- Start Includes -->
<?php
include('../../includes/session.php');
include('../../includes/navbar.php');
?>

<?php
include('../../controllers/DBController.php');
include('../../controllers/CategoryController.php');

?>

<!-- Start Main  -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Sample Inner Page</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Create New Category</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <?php if (isset($_SESSION['errors']) && $_SESSION['errors'] != []) { ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <?php foreach ($_SESSION['errors'] as $error) { ?>
                        <li class="list-unstyled bg-danger text-center text-white"><?php echo $error; ?></li>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php $_SESSION['errors'] = [];  ?>

    <section class="sample-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto form-border">
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <h5 class="text-center"> Add New Category </h5>
                        <div class="form-group mt-2">
                            <label for="name">Category name: </label>
                            <input type="text" class="form-control mt-1" name="name" id="name">
                        </div>
                        <div class="form-group mt-2">
                            <label for="price">Category Description:</label>
                            <input class="form-control mt-1" name="description" id="description">
                        </div>

                        <div class="form-group mt-2">
                            <label for="img">Image</label>
                            <input type="file" class="form-control mt-1" name="image" id="image">
                        </div>
                        <div class="text-center">
                            <!--submit button has a name so that if send data he will check if data sent or not  -->
                            <input class="btn btn-primary mt-3" type="Submit" name="submit" value="Add Category">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>
<?php include('../../includes/footer.php'); ?>