<?php
get_header();
//for breadcrumbs
get_template_part('includes/breadcrumbs');
?>

<!-- best-spoken-classes start  -->
<div class="container-fluid">
    <div class="container">
        <div class="row my-5">

            <div class="col-md-9">

                <!--  1st part start  -->
                <div class="first-part">

                    <div class="d-flex justify-content-center">
                        <?php
                        $episodeNo = get_field('episode');
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        $yotubeVideoLink = get_field('youtube_video_link');
                        $fbVideoLink = get_field('facebook_link');
                        if (!empty($yotubeVideoLink)) { ?>
                            <!--start per_category_image-->
                            <div class="ratio ratio-16x9">
                                <iframe class="w-100"
                                    src="<?php echo 'https://www.youtube.com/embed/' . $yotubeVideoLink ?>?rel=0&autoplay=1&autohide=1&showinfo=0"
                                    allow="autoplay; encrypted-media" frameborder="0"></iframe>

                            </div>
                            <!--//end per_category_image-->
                        <?php } elseif (!empty($fbVideoLink)) { ?>

                            <!-- It is must to be here start -->
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="FbVideo"></script>
                            <div class="fb-video" data-href="<?php echo $fbVideoLink; ?>" data-show-text="false" data-width="">
                            </div>
                            <!-- It is must to be here end -->

                            <?php } else {
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large', array(
                                    'class' => 'img-fluid d-flex',
                                    'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                                ));
                            } else { ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/custom-thumb-636x358.jpg' ?>"
                                    alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>"
                                    class="w-100 mb-2">
                        <?php }
                        } ?>
                    </div>

                    <div class="mt-4">
                        <h4 class="mb-md-3 mb-2"> পর্ব : <?php echo $episodeNo; ?> </h4>
                        <h3 class="fw-bold"> <?php the_title(); ?> </h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <!--  1st part end -->
            </div>

            <!--*** Quick links and enquiry form section start  ***-->
            <div class="col-md-3 mt-md-0 mt-3">

                <h6 class="bg-light px-3 py-2"> আরও পর্ব </h6>

                <?php
                $thumb_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                $category = get_the_category(); //get first current category ID
                $this_post = get_the_ID(); //get ID of current post
                $args = array(
                    'numberposts'   =>  10,
                    'order'         =>  'DESC',
                    'category'      =>  $category[0]->cat_ID,
                    'exclude'       =>  array($this_post)

                );

                $posts = get_posts($args);

                foreach ($posts as $post) { ?>
                    <div class="border mb-md-5 mb-3">
                        <div class="card">
                            <?php
                            get_template_part('queries/talkshow-query'); ?>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata(); ?>

            </div>
            <!--*** Quick links and enquiry form section end  ***-->

        </div>
    </div>
</div>
<!-- best-spoken-classes end  -->


<div class="container mb-md-5 mb-3 d-print-none">
    <div class="row">
        <div class="col-12">
            <h6 class="fw-bold">আরও <?php bloginfo('name'); ?> পর্ব </h6>
            <div>
                <hr class="hr-rule-color">
            </div>
        </div>
    </div>

    <div class="row">
        <?php
        $thumb_id = get_post_thumbnail_id(get_the_ID());
        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
        // বর্তমান পোস্টের ক্যাটাগরি গুলো নিই
        $categories = get_the_category();

        if ($categories) {
            $category_ids = array();

            foreach ($categories as $category) {
                $category_ids[] = $category->term_id;
            }

            // রিলেটেড পোস্টের Query
            $related_query = new WP_Query(array(
                'category__in'   => $category_ids,   // একই ক্যাটাগরি
                'post__not_in'   => array(get_the_ID()), // বর্তমান পোস্ট বাদ
                'posts_per_page' => 4,               // কয়টি রিলেটেড পোস্ট চাই
                'orderby'        => 'date',
                'order'          => 'DESC'
            ));

            if ($related_query->have_posts()) {
                while ($related_query->have_posts()) {
                    $related_query->the_post(); ?>
                    <div class="col-md-3 d-flex align-items-stretch">
                        <div class="card">
                            <?php get_template_part('queries/talkshow-query'); ?>
                        </div>
                    </div>
        <?php }
                wp_reset_postdata();
            }
        }
        ?>
    </div>
</div>

<?php get_footer();
