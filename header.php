<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="body-phone-float position-relative">

    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>


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
                            <i class="bi bi-telephone"></i> +01716346975
                        </a>
                        <div class="vr"></div>
                    </div>



                    <div class="location d-flex justify-content-center align-items-center">
                        <a href="#" class="text-decoration-none text-white text-center">
                            <i class="bi bi-geo-alt pe-2"></i>
                            260/6, Malibag Biggan College Bhavan, Lift-4, Dhaka-1200
                        </a>
                    </div>
                </div>
                <div class="col-md-6 top-menu">
                    <ul class="mb-0 d-flex justify-content-end">
                        <li>
                            <a href="<?php echo get_theme_mod('npa_social_media_1', '#'); ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('npa_social_media_2', '#'); ?>" target="_blank"><i class="bi bi-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header Top part end  -->


    <!-- Navbar Start  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-sm px-0 py-md-3 py-0 mb-md-5 mb-3">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-md-flex px-0 py-0">
                        <div class="speacing-betwn d-flex justify-content-between">
                            <a class="navbar-brand main-logo-size" href="index.html">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/main-logo.png' ?>"
                                    alt="Happiness_Main_Logo"></a>
                            <button class="navbar-toggler border-0 box-shadow-delete" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse collapse-horizontal ps-md-0 ps-3 py-md-0 py-3"
                            id="navbarNavDropdown">
                            <ul class="navbar-nav nav-ft-size">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary-menu',
                                    'menu_class'     => 'navbar-nav',
                                    'container'      => false,
                                    'depth'          => 0,
                                    'fallback_cb'    => 'primary_menu_fallback',
                                    'walker'         => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End  -->

    <!-- *****Header Section End *****-->