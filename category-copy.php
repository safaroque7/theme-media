<?php
get_header(); ?>



<div class="container">
    <div class="row p-4">
        <!--*** swiper slider start *** -->


        <?php
        while (have_posts()): the_post();
        ?>

            <!-- item start  -->
            <div class="col-md-3">
                <div class="card shadow">

                    <?php get_template_part('queries/talkshow-query'); ?>

                </div>
            </div>


    </div>
    <!-- item end  -->


<?php endwhile;
        wp_reset_postdata(); ?>



<!--*** swiper slider end *** -->
</div>
</div>



<?php get_footer();
