<?php
get_header();
//for breadcrumbs
get_template_part('parts/breadcrumbs');
?>


<div class="container">
    <div class="row p-4 bg-body-tertiary rounded-3">
        <!--*** swiper slider start *** -->
        <?php
        while (have_posts()): the_post();
        ?>
            <!-- item start  -->
            <div class="col-md-3 col-12 mb-md-4 mb-2">
                <div class="card shadow">
                    <?php get_template_part('parts/queries/talkshow-query'); ?>
                </div>
            </div>
            <!-- item end  -->
        <?php endwhile;
        get_template_part('parts/pagination');
        wp_reset_postdata(); ?>
        <!--*** swiper slider end *** -->
    </div>
</div>
<?php get_footer();
