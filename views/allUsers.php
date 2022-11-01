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
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/css/main.css" rel="stylesheet" />
</head>
<!-- Start Includes -->
<?php
include('../includes/session.php');
include('../includes/navbar.php');
?>

<?php
include('../controllers/DBController.php');
include('../controllers/UserController.php');
$users = new User();
$users = $users->index();


?>

<!-- Start Main  -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>All users</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>All users</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="sample-page">
        <div class="container">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary mb-3 mt-0  me-2" href="<?php echo url('views/addUser.php') ?>">
                    Add New User
                </a>
            </div>

            <div class="table-responsive">

                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Phone</th>
                         <!-- <th>Image</th> -->
                        <th>Room</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>

                            <tr>
                                <td><?php echo $user["id"] ?> </td>
                                <td><?php echo $user["name"] ?> </td>
                                <td><?php echo $user["email"] ?> </td>
                                <td><?php echo $user["password"] ?> </td>
                                <td><?php echo $user["phone"] ?> </td>
                              <!--  <td><img width="60px" src="../uploads/<?php echo $user['image']; ?>" alt=""> </td> -->
                                <td><?php echo $user["room_id"] ?> </td>
                                <td>

                                    <a href="show.php?id=<?php echo $user['id']; ?>" title="show" class="btn btn-info text-white btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.php?id=<?php echo $user['id']; ?>" title="edit" class="btn btn-success text-white btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="destroy.php?id=<?php echo $user['id']; ?>" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure You Want To Delete This User ?') ;">
                                        <i class="fas fa-trash"></i>
                                    </a>




                                </td>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<?php include('../includes/footer.php'); ?>