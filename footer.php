<!-- *****Footer Section Start *****-->
<div class="container-fluid footer-bg-color">
    <div class="container">
        <div class="row py-5">

            <!-- পুটার মেইন লোগো -->
            <div class="col-md-4 mb-md-0 mb-3">
                <div class="row">
                    <div class="col-md-3 col-3 haniness-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/main-logo.png' ?>" alt="Main Logo" class="img-fluid mb-md-3 mb-2"></a>
                    </div>
                    <div class="col-12 footer-address mb-md-0 mb-3">
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-geo-alt"></i>
                            260/6, Malibag Biggan College Bhavan, Lift-4, Dhaka-1200
                        </a>
                        <a href="#" class="text-decoration-none d-block">
                            <i class="bi bi-phone-vibrate"></i> +01716346975
                        </a>
                        <a href="#" class="text-decoration-none d-block">
                            <i class="bi bi-envelope-at"></i> sitv24.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- ক্যাটাগরি -->
            <div class="col-md-2 footer-company mb-md-0 mb-3">
                <h5 class="footer-headings-color mb-md-3 mb-2">ক্যাটাগরি</h5>
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'bottom-category-menu',
                        'menu_class'     => '',
                        'container'      => false,
                        'fallback_cb'    => 'bottom_category_menu_fallback',
                    ));
                    ?>
                </ul>
            </div>

            <!-- লিগ্যাল মেনু -->
            <div class="col-md-3 footer-courses mb-md-0 mb-3">
                <h5 class="footer-headings-color mb-md-3 mb-2"> লিগ্যাল মেনু </h5>
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'legal-menu',
                        'menu_class'     => '',
                        'container'      => false,
                        'fallback_cb'    => 'legal_menu_fallback',
                    ));
                    ?>
                </ul>
            </div>

            <!-- যোগাযোগ -->
            <div class="col-md-3 footer-getin-touch mb-md-0 mb-3">
                <h5 class="footer-headings-color mb-md-3 mb-2"> যোগাযোগ </h5>
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'get-in-touch-menu',
                        'menu_class'     => '',
                        'container'      => false,
                        'fallback_cb'    => 'contact_menu_fallback',
                    ));
                    ?>
                </ul>
                <button class="btn bg-danger text-white px-5"> যোগ দিন আপনিও </button>
            </div>

        </div>
    </div>
</div>
<!-- *****Footer Section End *****-->

<!-- ****Footer-Bottom section Start  ****-->

<div class="container-fluid footer-bg-color border-top border-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 py-3 d-flex justify-content-center ">

                <p class="text-secondary mb-0">2025 <code class="text-white">S I TV</code> All Rights
                    Reserved. Design and Development By: <a href="https://webnewsdesign.com" target="_blank"> webnewsdesign.com </a></p>
            </div>

        </div>
    </div>
</div>
<!-- ****Footer-Bottom section End  ****-->


<?php wp_footer(); ?>
</body>

</html>