<?php
function media_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_image_size('image-size-287x185', 287, 185, true);
}

add_action('after_setup_theme', 'media_theme_setup');
