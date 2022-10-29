<?php
include('../includes/session.php');
include('../includes/navbar.php');
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
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/main.css" rel="stylesheet" />
</head>
<!-- Start Includes -->

<?php
include('../controllers/DBController.php');
include('../controllers/UserController.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = new User();
    $user = $user->show($id);

    $_SESSION['id'] = $id;
}
?>

<!-- Start Main  -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Edit User</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="sample-page">
        <?php if (isset($_GET['id']) && $user !== false) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto form-border">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                    <h2 class="text-center mb-4 text-primary">Update User</h2>

    
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo $user['name'] ?>" required  >
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" value="<?php echo $user['email'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password"  required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password"  required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="room_id" placeholder="Room number" value="<?php echo $user['room_id'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo $user['phone'] ?>" required>
                    </div>
             
                
                
                    <div class="mb-3">
                        <input class="form-control form-control-sm" type="file" name="profile" id="formFile">
                    </div>
                  
                    <div class="mb-3">
                        <input class="form-control button" type="submit" name="add_user" value="Update User">
                    </div>
      
                </form>
                    </div>

                </div>
            </div>
        <?php } else { ?>
            User Not Found
        <?php } ?>
    </section>
</main>
<?php include('../includes/footer.php'); ?>