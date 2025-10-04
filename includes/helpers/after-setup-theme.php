<?php
function theme_media_after_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('image-size-307x185', 307, 185, true);
};
add_action('after_setup_theme', 'theme_media_after_setup_theme');
