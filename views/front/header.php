<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
$cin=$_SESSION['cin'];
$userName=$_SESSION['userName'];









//définir la session une session est un tableau temporaire

//
?>

<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/povo/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:13:24 GMT -->
<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Fontawesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- TITLE -->
    <title>Povo - Travel Agency & Tourism HTML Template</title>
</head>

<body>

<!-- Start Loader -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Loader -->

<!-- Start Navbar Area -->
<div class="navbar-area  header-sticky">
    <div class="povo-mobile-nav">
        <div class="logo">
            <a href="index-2.html">
                <img src="assets/img/logo.png" alt="logo">
            </a>
        </div>
    </div>

    <div class="povo-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">


                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="afficherVols.php" class="nav-link">les vols</a>
                        </li>

                        <li class="nav-item">
                            <a href="voyages2.php" class="nav-link">voyage organisée</a>
                        </li>



                        <li class="nav-item">
                            <a href="signup.html" class="nav-link">Signup</a>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>

                                <li class="nav-item">
                                    <a href="gallery.html" class="nav-link">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tours </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="tours.html" class="nav-link">Tours</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-tours.html" class="nav-link">Single Tours</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">News</a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="news.html" class="nav-link">News</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-news.html" class="nav-link">Single News</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">Faq</a>
                                </li>



                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">404 Error</a>
                                </li>

                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">News <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="news.html" class="nav-link">News</a>
                                </li>

                                <li class="nav-item">
                                    <a href="single-news.html" class="nav-link">Single News</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="signup.html" class="nav-link"><?php echo $userName ; ?></a>
                            </li>

                            <li class="nav-item">
                                <select class="lang">
                                    <option>English</option>
                                    <option>Australia</option>
                                </select>
                            </li>

                            <li class="nav">
                                <a class="nav-link" href="#searchmodal" data-toggle="modal" data-target="#searchmodal">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <li class="nav">
                                <a class="nav-link" href="#" data-toggle="modal"        data-target="#myModal">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
