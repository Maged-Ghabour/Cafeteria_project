<?php

function Url($input = null)
{


    return "http://" . $_SERVER['HTTP_HOST'] . "/Cafeteria_project/" . $input;
}
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1>Cafetaria<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo url('index.php') ?>">Home</a></li>
                    <?php if (isset($_SESSION['is_admin'])) { ?>
                        <?php if ($_SESSION['is_admin'] == 1) { ?>
                            <li><a href="<?php echo url('views/allUsers.php') ?>">Users</a></li>
                        <?php } ?>
                    <?php } ?>
                    <li><a href="<?php echo url('views/Product/index.php') ?>">Products</a></li>
                    <li><a href="<?php echo url('views/Category/index.php') ?>">Categories</a></li>
                    <li><a href="<?php echo url('views/Cart/index.php') ?>">Manual orders</a></li>
                    <li><a href="#chefs">Checks</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <?php if (isset($_SESSION["id"])) { ?>
                <a class="nav-item nav-link disabled text-muted mx-0">Hello , <?php echo $_SESSION["name"] . " 👋" ?></a>
                <a class="btn-book-a-table mx-1" href="<?php echo url('handlers/handleLogout.php') ?>">logout</a>
            <?php } ?>
            <?php if (!isset($_SESSION["id"])) { ?>
                <a class="btn-book-a-table bg-primary text-white mx-0" href="<?php echo url('views/login.php') ?>">login</a>

            <?php } ?>

        </div>
    </header>