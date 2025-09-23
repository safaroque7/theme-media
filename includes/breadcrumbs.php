<!-- breadcrum start -->
<div class="container-fluid bg-color mb-md-5 mb-3">
    <div class="container">
        <div class="row d-flex ">
            <div class="col-12 py-3">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-bold"><a href="<?php echo esc_url(home_url()); ?>"
                                class="text-decoration-none text-white">প্রচ্ছদ</a></li>
                        <li class="breadcrumb-item text-white fw-bold" aria-current="page">


                            <?php
                            if (is_page()) {
                                the_title();
                            } elseif (is_single()) {
                                the_title();
                            } elseif (is_home() || is_front_page()) {
                                bloginfo('name');
                            } elseif (is_category()) {
                                single_cat_title();
                            } elseif (is_tag()) {
                                single_tag_title();
                            } elseif (is_search()) {
                                echo 'Search results for: ' . get_search_query();
                            } elseif (is_404()) {
                                echo 'Page Not Found';
                            }
                            ?>

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrum end -->