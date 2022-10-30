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
<?php
include('../../includes/session.php');
include('../../includes/navbar.php');
?>

<?php
include('../../controllers/DBController.php');
include('../../controllers/CategoryController.php');

$id = $_GET['id'];
$category = new Category();
$category = $category->show($id);
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
                    <li>Show Category</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="sample-page">
        <!--View Products If there are products found  -->
        <h2 class="text-center"> <?php echo $category['name']; ?> Category</h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <img src="../../uploads/<?php echo $category['image']; ?>" class="w-100" alt="1.jpg" title="Laptop">
                    <h3 class="text-center">
                        <?php echo $category['name'];  ?>
                    </h3>
                    <p class="price">
                        <?php echo $category['description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->

<!-- Includes Footer and scripts -->
<?php include('../../includes/footer.php');
