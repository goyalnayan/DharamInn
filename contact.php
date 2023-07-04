<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>DharamInn - Restaurant</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--====== magnific-popup css ======-->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="assets/vendor/slick/slick.css">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Search From ======-->
    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="text" class="form_control" placeholder="Search here" name="search">
                        <label><i class="fa fa-search"></i></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====== Start Header ======-->
    <header class="header-area page-header transparent-header">
        <div class="top-bar text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="top-left">
                            <span class="text">Free delivery for all orders over $50. Order your food now!</span>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="top-right d-flex align-items-center justify-content-lg-end">
                            <span class="text"><i class="far fa-envelope"></i>Subscribe & Get 10% Off</span>
                            <!-- <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <!--====== Start PHP for Contact ======-->
 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $message = $_POST['message'];

      // Connection to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";


    // Create a connection object
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
    //Submit these to a database 
    // Sql query to be executed
    $sql = "INSERT INTO `contactnew` (`name`, `phone`, `email`, `website`, `message`, `dt`) VALUES ('$name', '$phone_number', '$email', '$website', '$message', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';        
    }
    else{
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issues and your entry was not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';  
    }
    }
    }
?>


        <!--=== Header Navigation ===-->
        <div class="header-navigation navigation-two navigation-white">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <!--=== Primary Menu ===-->
                <div class="primary-menu">
                    <!--=== Site Branding ===-->
                    <div class="site-branding">
                        <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo2.png"
                                alt="Site Logo"></a>
                    </div>
                    <!--=== Nav Inner Menu ===-->
                    <div class="nav-inner-menu">
                        <div class="nav-menu">
                            <!--=== Mobile Logo ===-->
                            <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo.png"
                                        alt="Site Logo"></a>
                            </div>
                            <!--=== Main Menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="#" class="active">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Restaurant</a></li>
                                            <!-- <li><a href="index-2.html">Home Fastfood</a></li> -->
                                            <!-- <li><a href="index-3.html">Home Seafood</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Menu</a>
                                        <ul class="sub-menu">
                                            <li><a href="menu-fastfood.html">Menu Fastfood</a></li>
                                            <!-- <li><a href="menu-seafood.html">Menu Seafood</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">Our Products</a></li>
                                            <!-- <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="cart.html">Sopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li> -->
                                        </ul>
                                    </li>
                                    <!-- <li class="menu-item has-children"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li> -->
                                    <li class="menu-item"><a href="about.html">About</a></li>
                                    <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>                            
                                </ul>
                            </nav>
                            <!--=== Nav Button ===-->
                            <div class="menu-button mt-40 d-xl-none">
                                <a href="contact.php" class="main-btn btn-red">Book a Table<i
                                        class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--=== Nav right Item ===-->
                        <div class="nav-right-item d-flex align-items-center">
                            <div class="search-button">
                                <div class="search-btn" data-bs-toggle="modal" data-bs-target="#search-modal"><i
                                        class="fas fa-search"></i></div>
                            </div>
                            <div class="nav-call-button">
                                <span><img src="assets/images/call.png" alt="icon"><a
                                        href="tel:000(123)45689">+91 75322 32390</a></span>
                            </div>
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.php" class="main-btn btn-red">Book a Table<i
                                        class="fas fa-long-arrow-right"></i></a>
                            </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header ======-->
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg p-r z-1 bg_cover"
        style="background-image: url(assets/images/bg/page-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center wow fadeInDown">
                        <h1 class="page-title">Contact</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->

    <!--====== Start Contact Owner Section ======-->
    <section class="chefs-bg-section light-red-bg pt-130 pb-100 bg_cover p-r z-1">
        <div class="dot-bg bg_cover" style="background-image: url(assets/images/bg/dot-bg.png);"></div>
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-xl-8 col-lg-12">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="single-team-item mb-30 wow fadeInUp">
                                <div class="chef-img">
                                    <img src="assets/images/profile/owner.jpg" alt="Chef Image">
                                    <div class="chef-overlay"></div>
                                    <div class="hover-content">
                                        <!-- <h3 class="title">Jimmie K. Cryer</h3>
                                            <p class="position">Senior Chef</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="chef-content-box content-box-gap mb-30 pr-lg-30 wow fadeInLeft">
                        <div class="section-title section-title-left mb-30">
                            <span class="sub-title">Best food menu</span>
                            <h2>Meet Our Owner
                            </h2>
                        </div>
                        <ul class="check-style-one">
                            <li>Many Years of Experience in Restaurant
                                Services in Mumbai</li>
                            <li>Any Kind Of Food Made For Customer and So Much Yamee & Testy</li>
                        </ul>
                        <!-- <p>Sit amet consectetur adipiscing elitsue risus mauris quam adipiscing phasellus aene ante
                                orcirat scelerisque enim ut nulla</p>
                            <a href="chefs.html" class="main-btn filled-btn">become a chef<i
                                    class="far fa-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
    <!--====== End Contact Owner Section ======-->


    

<div class="contact-form-one"><form id="contactForm" class="contactForm" action="practice.php" name="contactForm" method="post"></form></div>

<!--====== Start Contact Section ======-->
<section class="contact-section pt-130 pb-130">
<div class="container">
    <div class="contact-info-wrapper pt-70 pb-30 wow fadeInUp">
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-one">
                    <form id="contactForm" class="contactForm" action="contact.php"
                        name="contactForm" method="post">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="form_group form-group">
                                    <input type="text" class="form_control" id="name" placeholder="Name"
                                        name="name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group form-group">
                                    <input type="text" class="form_control" id="phone_number"
                                        placeholder="Phone Number" name="phone_number" required
                                        data-error="Please enter your Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group form-group">
                                    <input type="email" class="form_control" id="email"
                                        placeholder="Email Address" name="email" required
                                        data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group form-group">
                                    <input type="url" class="form_control" id="website" placeholder="Website"
                                        name="website" required data-error="Please enter your Website">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form_group form-group">
                                    <textarea class="form_control" id="message" placeholder="Write Message"
                                        name="message" required
                                        data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group form-group">
                                    <button class="main-btn btn-red" type="submit">Send us message<i
                                            class="far fa-arrow-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--====== End Contact Section ======-->

    <!--====== Start Contact Map Section ======-->
    <section class="contact-page-map wow fadeInUp">
        <!--=== Map Box ===-->
        <!-- <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div> -->
    <!--====== End Contact Map Section ======-->

    <!--====== Start Partners Section ======-->
    <section class="partners-section light-red-bg pt-60 pb-60">
        <div class="container">
            <!--=== Partners Slider ===-->
            <div class="partner-slider-one wow fadeInDown">
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-1.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-2.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-3.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-5.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-6.png" alt="Partner Image"></a>
                    </div>
                </div>
                <div class="single-partner-item">
                    <div class="partner-img">
                        <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Partners Section ======-->
    <!--=== Start Footer ===-->
    <footer class="footer-default light-red-bg p-r z-1 pt-80">
        <div class="dot-bg bg_cover" style="background-image: url(assets/images/bg/dot-bg.png);"></div>
        <!--=== Footer Widget Area ===-->
        <div class="footer-widget-area pb-10 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget about-company-widget pr-lg-30 mb-40 wow fadeInUp">
                            <div class="footer-content">
                                <a href="index.html" class="footer-logo mb-30"><img src="assets/images/logo/logo3.png"
                                        alt="Brand Logo"></a>
                                <p>Hotel Dharam Inn is in Morena for 11 years and it's a well-developed restaurant. Our
                                    customers are always satisfied with our services.
                                </p>
                                <form>
                                    <div class="form_group">
                                        <label><i class="far fa-arrow-right"></i></label>
                                        <input type="email" class="form_control" placeholder="Email Address"
                                            name="email">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget footer-nav-widget pl-lg-30 mb-40 wow fadeInDown">
                            <h4 class="widget-title">Quick Links</h4>
                            <div class="footer-nav-content">
                                <ul class="footer-nav">
                                    <li><a href="about.html">About Company</a></li>
                                    <li><a href="products.html">Home Shop</a></li>
                                    <li><a href="menu-fastfood.html">Our Menu</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <!-- <li><a href="#">Recipes</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget footer-nav-widget-two pl-lg-70 mb-40 wow fadeInUp">
                            <h4 class="widget-title">Products</h4>
                            <div class="footer-nav-content">
                                <ul class="footer-nav">
                                    <li><a href="products.html">Vegetable Burger</a></li>
                                    <li><a href="products.html">Italian Pizza</a></li>
                                    <li><a href="products.html">Cheese</a></li>
                                    <li><a href="products.html">Salad Roll </a></li>
                                    <li><a href="products.html">Noodles</a></li>
                                </ul>
                                <ul class="footer-nav">
                                    <li><a href="products.html">Sandwich</a></li>
                                    <li><a href="products.html">Pasta</a></li>
                                    <li><a href="products.html">Bread</a></li>
                                    <li><a href="products.html">Soup</a></li>
                                    <li><a href="products.html">Biscotti</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget contact-info-widget pl-lg-70 mb-40 wow fadeInDown">
                            <div class="contact-info-box mb-20">
                                <span class="title">Call for order:</span>
                                <h3><a href="tel:+125865892">+91 75322 32390</a></h3>
                                <!-- <p><a href="mailto:hello@example.com">hello@example.com</a></p> -->
                            </div>
                            <div class="contact-info-box mb-20">
                                <span class="title">Location :</span>
                                <p>Sindhi Colony, Jiwaji Ganj, Morena, Madhya Pradesh 476001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Copyright Area ===-->
        <div class="copyright-area border-top-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--=== Copyright Text ===-->
                        <div class="copyright-text">
                            <P>&copy; 2022 Dharam Inn, All Rights Reserved</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== Copyright Nav ===-->
                        <!-- <div class="copyright-nav float-lg-end">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">Faqs</a></li>
                                    <li><a href="#">Food Menu</a></li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer><!--=== End Footer ===-->
    <!--=== End Reservation Section ===-->
    <!--====== Back To Top  ======-->
    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
    <!--====== Jquery js ======-->
    <script src="assets/vendor/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/vendor/popper/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="assets/vendor/slick/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="assets/vendor/isotope.min.js"></script>
    <!--====== Imagesloaded js ======-->
    <script src="assets/vendor/imagesloaded.min.js"></script>
    <!--====== Counterup js ======-->
    <script src="assets/vendor/jquery.counterup.min.js"></script>
    <!--====== Waypoints js ======-->
    <script src="assets/vendor/jquery.waypoints.js"></script>
    <!--====== Nice-select js ======-->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!--====== jquery UI js ======-->
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!--====== WOW js ======-->
    <script src="assets/vendor/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/theme.js"></script>

    <!--====== AjaxChimp Min JS ======-->
    <script src="assets/vendor/jquery.ajaxchimp.min.js"></script>
    <!--====== Form Validator Min JS ======-->
    <script src="assets/vendor/form-validator.min.js"></script>
    <!--====== Contact Form Min JS ======-->
    <script src="assets/vendor/contact-form-script.js"></script>
</body>

</html>