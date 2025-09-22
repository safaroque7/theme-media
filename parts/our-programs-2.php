<!--*** English Speaking Section Start *** -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <div class="section-title d-flex">
                    <div class="vr icon-color opacity-100" style="width:5px ; height: 40px;"></div>
                    <h2 class="ps-3"> সংগঠন </h2>
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
                            while ($episode->have_posts()): $episode->the_post();
                            ?>

                                <!-- item start  -->
                                <div class="col-md-3 swiper-slide">
                                    <div class="card shadow">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large', array('class' => 'img-fluid'));
                                        }
                                        ?>
                                        <!-- <img src="<?php //echo get_template_directory_uri() . '/images/our_courses_1.jpg' 
                                                        ?>" class="card-img-top " alt="..."> -->
                                        <div class="card-body pb-2 text-center">

                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-black">
                                                <h5 class="card-title mb-3"> <?php the_title(); ?> </h5>
                                            </a>

                                            <?php the_content(); ?>

                                            <div class="row border-top py-3">
                                                <div class="col-6 call-btn border-end view-btn-hover d-flex justify-content-center align-items-center"> পর্ব : <?php echo get_field('episode'); ?> </div>
                                                <div
                                                    class="col-6 d-view-btn view-btn-hover d-flex justify-content-center">
                                                    <a href="<?php the_permalink(); ?>" class="btn rounded-1 brand-color"> বিস্তারিত </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- item end  -->


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