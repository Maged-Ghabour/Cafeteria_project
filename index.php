<!-- Start Includes -->
<?php
include('includes/session.php');
include('includes/head.php');
include('includes/navbar.php');
include('controllers/DBController.php');
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
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Starters</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Breakfast</h4>
                    </a><!-- End tab nav item -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Lunch</h4>
                    </a>
                </li>
                <!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                        <h4>Dinner</h4>
                    </a>
                </li>
                <!-- End tab nav item -->
            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade active show" id="menu-starters">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Starters</h3>
                    </div>

                    <div class="row gy-5">
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$5.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Aut Luia</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$14.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Est Eligendi</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$8.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Laboriosam Direva</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$9.95</p>
                        </div>
                        <!-- Menu Item -->
                    </div>
                </div>
                <!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-breakfast">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Breakfast</h3>
                    </div>

                    <div class="row gy-5">
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$5.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Aut Luia</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$14.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Est Eligendi</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$8.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Laboriosam Direva</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$9.95</p>
                        </div>
                        <!-- Menu Item -->
                    </div>
                </div>
                <!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="menu-lunch">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Lunch</h3>
                    </div>

                    <div class="row gy-5">
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$5.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Aut Luia</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$14.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Est Eligendi</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$8.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Laboriosam Direva</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$9.95</p>
                        </div>
                        <!-- Menu Item -->
                    </div>
                </div>
                <!-- End Lunch Menu Content -->

                <div class="tab-pane fade" id="menu-dinner">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Dinner</h3>
                    </div>

                    <div class="row gy-5">
                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$5.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Aut Luia</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$14.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Est Eligendi</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$8.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Eos Luibusdam</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$12.95</p>
                        </div>
                        <!-- Menu Item -->

                        <div class="col-lg-4 menu-item">
                            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" /></a>
                            <h4>Laboriosam Direva</h4>
                            <p class="ingredients">Lorem, deren, trataro, filede, nerada</p>
                            <p class="price">$9.95</p>
                        </div>
                        <!-- Menu Item -->
                    </div>
                </div>
                <!-- End Dinner Menu Content -->
            </div>
        </div>
    </section>
    <!-- End Menu Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Chefs</h2>
                <p>Our <span>Proffesional</span> Chefs</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="" />
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Master Chef</span>
                            <p>
                                Velit aut quia fugit et et. Dolorum ea voluptate vel tempore
                                tenetur ipsa quae aut. Ipsum exercitationem iure minima enim
                                corporis et voluptate.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Chefs Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="" />
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Patissier</span>
                            <p>
                                Quo esse repellendus quia id. Est eum et accusantium pariatur
                                fugit nihil minima suscipit corporis. Voluptate sed quas
                                reiciendis animi neque sapiente.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Chefs Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="" />
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cook</span>
                            <p>
                                Vero omnis enim consequatur. Voluptas consectetur unde qui
                                molestiae deserunt. Voluptates enim aut architecto porro
                                aspernatur molestiae modi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Chefs Member -->
            </div>
        </div>
    </section>
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Contact</h2>
                <p>Need Help? <span>Contact Us</span></p>
            </div>

            <div class="mb-3">
                <iframe style="border: 0; width: 100%; height: 350px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <div>
                                <strong>Mon-Sat:</strong> 11AM - 23PM;
                                <strong>Sunday:</strong> Closed
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Info Item -->
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>
            <!--End Contact Form -->
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End Products -->

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>