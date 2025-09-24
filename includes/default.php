<?php
function media_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_image_size('image-size-307x185', 307, 185, true);
}

add_action('after_setup_theme', 'media_theme_setup');
