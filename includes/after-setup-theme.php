<?php 
function theme_media_after_setup_theme()
{
    add_theme_support('post-thumbnails');
};
add_action('after_setup_theme', 'theme_media_after_setup_theme');