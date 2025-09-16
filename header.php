<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiness Institute</title>

    <?php wp_head(); ?>
</head>

<body class="body-phone-float position-relative  ">
    <div class="social-logo-float position-absolute bottom-0 end-0">
        <ul class="ps-0">
            <li class="mb-2 me-3">
                <a href="#" class="text-decoration-none text-white bg-color fs-5"><i class="bi bi-telephone"></i> </a>
            </li>

            <li class="me-3">
                <a href="#" class="text-decoration-none text-white bg-success fs-5"><i class="bi bi-whatsapp"></i> </a>
            </li>


        </ul>
    </div>
    <!-- *****Header Section Start***** -->

    <!-- header Top part start  -->
    <div class="container-fluid header-top-bg-color py-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center py-2">
                <div class="col-md-6 d-md-flex">
                    <div class="Phone-no px-2 d-flex justify-content-center align-items-center">
                        <a href="#" class="text-decoration-none text-white pe-2">
                            <i class="bi bi-telephone"></i> +01914449393
                        </a>
                        <div class="vr"></div>
                    </div>



                    <div class="location d-flex justify-content-center align-items-center">
                        <a href="#" class="text-decoration-none text-white text-center">
                            <i class="bi bi-geo-alt pe-2"></i>
                            Anarkoli Market, Malibag, Dhaka-1200
                        </a>
                    </div>
                </div>
                <div class="col-md-6 top-menu">
                    <ul class="mb-0">
                        <li class="d-md-flex">
                            <a href="index.html">Go To Home</a>

                            <div class="vr"></div>
                            <a href="about-us.html">About Us</a>
                            <div class="vr"></div>
                            <a href="#">Blog</a>
                            <div class="vr"></div>
                            <a href="contact-us.html">Contact Us</a>
                            <div class="vr"></div>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <div class="vr"></div>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <div class="vr"></div>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <div class="vr"></div>
                            <a href="#"><i class="bi bi-google-play"></i></a>
                        </li>
                    </ul>


                </div>

            </div>
        </div>
    </div>
    <!-- header Top part end  -->


    <!-- Navbar Start  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm px-0 py-md-3 py-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-md-flex px-0 py-0">
                        <div class="speacing-betwn d-flex justify-content-between">
                            <a class="navbar-brand main-logo-size" href="index.html">
                                <img src="<?php echo get_template_directory_uri() . '/images/happiness-logo.jpg' ?>" alt="Happiness_Main_Logo"></a>
                            <button class="navbar-toggler border-0 box-shadow-delete" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse collapse-horizontal ps-md-0 ps-3 py-md-0 py-3" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-ft-size">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        ENGLISH SPEAKING
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">English For Beginners</a>
                                        </li>
                                        <li><a class="dropdown-item" href="single-page.html">English For Business</a>
                                        </li>
                                        <li><a class="dropdown-item" href="single-page.html">English For Foreign</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        PUBLIC SPEAKING
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">Speaking For Corporates</a>
                                        </li>
                                        <li><a class="dropdown-item" href="single-page.html">Speaking For Motivational
                                                Speakers</a>
                                        </li>
                                        <li><a class="dropdown-item" href="single-page.html">Speaking For Students</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        INTERVIEW
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">Interview For SSB</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">Interview For MNC</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">Interview For Jobs</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">Interview For Cabin
                                                Crew</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        PERSONALITY DEVELOPMENT
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">Disordered Personality</a>
                                        </li>
                                        <li><a class="dropdown-item" href="single-page.html">Personal Development &
                                                Growth</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        STUDY ABROAD
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">IELTS</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">TOEFL</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">OET</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">PTE</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        FOREIGN LANGUAGES
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="single-page.html">French</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">German</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">Spanish</a></li>
                                        <li><a class="dropdown-item" href="single-page.html">Japanese</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        GALLERY
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="image-gallery.html">Image Gallery</a></li>
                                        <li><a class="dropdown-item" href="video-gallery.html">Video Gallery</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End  -->

    <!-- *****Header Section End *****-->