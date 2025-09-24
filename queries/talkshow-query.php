 <!-- item start  -->
 <div class="position-relative media-theme-img-hover overflow-hidden">
     <a href="<?php the_permalink() ?>">
         <?php
            $thumb_id = get_post_thumbnail_id(get_the_ID());
            $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
            if (has_post_thumbnail()) {
                the_post_thumbnail('image-size-307x185', array(
                    'class' => 'img-fluid',
                    'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                ));
            } else { ?>
             <img src="<?php echo get_template_directory_uri() . '/images/alter-image-307x185px.jpg'
                        ?>" class="card-img-top" alt="...">
         <?php }
            $yotubeVideoLink = get_field('youtube_video_link');
            $fbVideoLink = get_field('facebook_link');

            if (!empty($yotubeVideoLink) || !empty($fbVideoLink)) { ?>
             <div class="text-danger fs-2 rounded-circle bg-white position-absolute top-50 start-50 translate-middle media-play d-flex justify-content-center align-items-center">
                 <!-- <i class="bi bi-play-circle-fill"></i> -->
                 <i class="fa-solid fa-circle-play fa-beat-fade" style="color: #ff0505;"></i>
             </div>
         <?php }

            ?>
     </a>
 </div>

 <div class="card-body pb-2 text-center">

     <a href="<?php the_permalink(); ?>" class="text-decoration-none text-black">
         <h5 class="card-title mb-3"> <?php the_title(); ?> </h5>
     </a>

     <p>
         <?php
            $content = get_the_content();
            $trim_words = wp_trim_words($content, 10, '...');
            echo $trim_words;
            ?>
     </p>
     <div class="border-top"></div>
     <div class="row py-3 d-flex justify-content-between align-items-center">
         <div class="col-6 call-btn border-end view-btn-hover d-flex justify-content-start">
             পর্ব : <?php echo get_field('episode'); ?>
         </div>
         <div class="col-6 d-view-btn view-btn-hover d-flex justify-content-end">
             <a href="<?php the_permalink(); ?>" class="btn rounded-1 brand-color"> বিস্তারিত </a>
         </div>
     </div>

 </div>