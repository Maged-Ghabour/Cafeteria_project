<!-- Start Includes -->
<?php
include('includes/session.php');
include('includes/head.php');
include('includes/navbar.php');
include('controllers/DBController.php');
include('controllers/CategoryController.php');
include('controllers/ProductController.php');
?>

<?php
$products = new Product();
$products = $products->index();

$cats = new Category();
$cats = $cats->index();

?>
<!-- ======= Categories ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Enjoy Your Healthy<br />Delicious Food</h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                    eveniet. Eum quas beatae cumque eum quaerat.
                </p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300" />
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Products -->
<main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>Yummy Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($cats as $cat) { ?>
                    <li class="nav-item">
                        <a class="nav-link active show" href="views/Category/show.php?id=<?php echo $cat['id']; ?>">
                            <h4><?php echo $cat['name']; ?></h4>
                        </a>
                    </li>
                <?php } ?>
                <!-- End tab nav item -->
            </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade active show" id="menu-starters">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Starters</h3>
                    </div>
                    <div class="container">

                        <div class="row gy-5">
                            <?php foreach ($products as $product) { ?>
                                <div class="col-md-3 mb-5">
                                    <div class="card">
                                        <img src="uploads/<?php echo $product['image']; ?>" class="w-100">
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
                                                    <a href="views/Product/show.php?id=<?php echo $product['id']; ?>" title="show" class="btn btn-info text-white btn-sm">
                                                        Show<i class="fas fa-eye"></i>
                                                    </a>
                                                    <?php if (isset($_SESSION['is_admin'])) {
                                                        if ($_SESSION['is_admin'] == 1) { ?>
                                                            <a href="views/Product/edit.php?id=<?php echo $product['id']; ?>" title="edit" class="btn btn-success text-white btn-sm">
                                                                Edit <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="views/Product/destroy.php?id=<?php echo $product['id']; ?>" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure You Want To Delete This Product ?') ;">
                                                                Delete<i class="fas fa-trash"></i>
                                                            </a>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Menu Item -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Starter Menu Content -->


            </div>
        </div>
    </section>
    <!-- End Menu Section -->
</main>
<!-- End Products -->

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>