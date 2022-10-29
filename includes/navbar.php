<?php

session_start();


function Url($input = null){
      
    
    return "http://".$_SERVER['HTTP_HOST']."/Cafeteria_project/".$input; 

}


?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Cafetaria<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo url('/') ?>">Home</a></li>
                    <?php if(isset($_SESSION['is_admin'])) { ?>
                    <li><a href="<?php echo url('views/allUsers.php') ?>">Users</a></li>
                    <?php } ?>
                    <li><a href="<?php echo url('views/Product/') ?>">Products</a></li>
                    <li><a href="#events">Manual orders</a></li>
                    <li><a href="#chefs">Checks</a></li>
                    <!-- <li><a href="#gallery">Gallery</a></li> -->
                    <!-- <li class="dropdown">
                        <a href="#"><span>Drop Down</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span>
                                    <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="views/Product/create.php">Create Product</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <!-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> -->

            <!-- If User  only Login ==>  Show Logout and his name -->
            <?php if (isset($_SESSION["id"])) { ?>
                <a class="nav-item nav-link disabled text-muted mx-0">Hello , <?php echo $_SESSION["name"] . " 👋" ?></a>
                <a class="btn-book-a-table mx-1" href="<?php echo url('handlers/handleLogout.php') ?>">logout</a>
            <?php } ?>
            <?php if (!isset($_SESSION["id"])) { ?>
                <a class="btn-book-a-table bg-primary text-white mx-0" href="<?php echo url('views/login.php') ?>">login</a>

            <?php } ?>

        </div>
    </header>
    <!-- End Header -->