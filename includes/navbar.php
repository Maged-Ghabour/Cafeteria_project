<?php

session_start();

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
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="../../views/Product/index.php">Products</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li class="dropdown">
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
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>

            <!-- If User  only Login ==>  Show Logout and his name -->
            <?php if (isset($_SESSION["id"])) { ?>
                <a class="nav-item nav-link disabled text-muted mx-0">Hello , <?php echo $_SESSION["name"] . " 👋" ?></a>
                <a class="btn-book-a-table mx-1" href="../../Cafeteria_project/handlers/handleLogout.php">logout</a>
            <?php } ?>
            <?php if (!isset($_SESSION["id"])) { ?>
                <a class="btn-book-a-table bg-primary text-white mx-0" href="../../Cafeteria_project/views/login.php">login</a>

            <?php } ?>

        </div>
    </header>
    <!-- End Header -->