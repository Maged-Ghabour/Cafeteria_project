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
include('../../controllers/ProductController.php');
include('../../controllers/UserController.php');

$products = new Product();
$products = $products->index();


$users = new User();
$users = $users->index();
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
                    <li>Create New Order</li>
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
                        <h5 class="text-center"> Add New Order </h5>

                        <div class="form-group mt-2">
                            <label for="id">Select User: </label>
                            <select name="user_id" class="form-control mt-1">
                                <option value="0">Select User</option>
                                <?php
                                foreach ($users as $user) { ?>
                                    <option value="<?php echo $user['id']; ?>"> <?php echo $user['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label for="total_price">Total Price:</label>
                            <input class="form-control mt-1" name="total_price" id="total_price">
                        </div>

                        <div class="row mt-2">
                            <!-- CURD Product  -->
                            <?php foreach ($products as $product) {  ?>
                                <div class="col-md-4 mb-5">
                                    <div class="card">
                                        <img src="../../uploads/<?php echo $product['image']; ?>" class="w-100">
                                        <div class="card-body bg-light">
                                            <h3 class="card-title text-center">
                                                <?php echo $product['name'];  ?>
                                            </h3>

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
                            <?php } ?>
                        </div>
                        <div class="text-center">
                            <!--submit button has a name so that if send data he will check if data sent or not  -->
                            <input class="btn btn-primary mt-3" type="submit" name="submit" value="Add Order">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>
<?php include('../../includes/footer.php'); ?>