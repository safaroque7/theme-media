<?php

function talkshow_design_function_1($category_number)
{ ?>

    <!--*** English Speaking Section Start *** -->
    <div class="container-fluid mb-md-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">

                    <div class="section-title d-flex">
                        <div class="vr icon-color opacity-100" style="width:5px ; height: 40px;"></div>

                        <?php
                        $original_id = $category_number;
                        $category_id = intval(get_theme_mod("rjs_category_dropdown_{$original_id}"));
                        if (empty($category_id)) {
                            $category_id = 1;
                        }

                        $category_name = get_cat_name($category_id);
                        $category_link = get_category_link($category_id);
                        ?>


                        <h2 class="ps-3 mb-0">
                            <a href="<?php echo esc_url($category_link); ?>" class="text-decoration-none text-secondary">
                                <?php echo esc_html($category_name); ?>

                                <!-- category No. On Off start -->
                                <?php
                                if (is_user_logged_in()) {
                                    $categoryOnOff = get_theme_mod('npa_category_switcher_id');
                                    if ('0' != $categoryOnOff) {
                                        echo '<span class="text-danger"> ' . esc_html($original_id) . ' </span>';
                                    }
                                }
                                ?>


                            </a>
                        </h2>
                    </div>
                    <div class="sub-title-and-btn d-md-flex justify-content-md-between">
                        <!-- <P class="mb-0 d-flex align-items-center">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Qui ducimus dignissimos obcaecati, est
                        maiores minima.</P> -->

                        <div class="next-btn-hover pt-md-0 pt-2">
                            <button class="btn button-next rounded-1 brand-color me-2 "><i
                                    class="bi bi-caret-left"></i></button>
                            <button class="btn button-prev rounded-1 brand-color"><i
                                    class="bi bi-caret-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-3 bg-body-tertiary rounded-3">
                    <div class="row p-4">
                        <!--*** swiper slider start *** -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <?php
                                $episode = new WP_Query(array(
                                    'cat'               =>  $category_id,
                                    'posts_per_page'    =>  10,
                                    'order'             =>  'DESC'
                                ));
                                while ($episode->have_posts()): $episode->the_post(); ?>
                                    <div class="col-md-3 swiper-slide d-flex align-items-stretch">
                                        <div class="card">
                                            <?php get_template_part('parts/queries/talkshow-query'); ?>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>

                            </div>
                        </div>
                        <!--*** swiper slider end *** -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*** English Speaking Section End *** -->

<?php }
