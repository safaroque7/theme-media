 <!-- item start  -->

 <?php
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
    if (has_post_thumbnail()) {
        the_post_thumbnail('image-size-287x185', array(
            'class' => 'img-fluid',
            'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
        ));
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