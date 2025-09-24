<!--*** English Speaking Section Start *** -->
<div class="container-fluid mb-md-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <div class="section-title d-flex">
                    <div class="vr icon-color opacity-100" style="width:5px ; height: 40px;"></div>
                    <h2 class="ps-3"> <a href="<?php echo get_category_link(5); ?>" class="text-decoration-none text-secondary"> <?php echo get_cat_name(5); ?> </a> </h2>
                </div>
                <div class="sub-title-and-btn d-md-flex justify-content-md-between">
                    <P class="mb-0 d-flex align-items-center">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Qui ducimus dignissimos obcaecati, est
                        maiores minima.</P>

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
                                'cat'               =>  5,
                                'posts_per_page'    =>  10,
                                'order'             =>  'DESC'
                            ));
                            while ($episode->have_posts()): $episode->the_post(); ?>

                                <div class="col-md-3 swiper-slide d-flex align-items-stretch">
                                    <div class="card shadow">
                                        <?php get_template_part('queries/talkshow-query'); ?>
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