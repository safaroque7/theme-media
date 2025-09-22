<?php
function theme_media_register_navbar() {
    register_nav_menus(array(
        'primary-menu'      =>  __('Primary Menu', 'media'),
        'top-menu'          =>  __('Top Menu', 'media'),
        'social-menu'       =>  __('Social Menu', 'media'),
        'episode-menu'      =>  __('Episode Menu', 'media'),
        'episode-menu'      =>  __('Episode Menu', 'media'),
        'legal-menu'        =>  __('Legal Menu', 'media'),
        'get-in-touch-menu' =>  __('Get In Touch Menu', 'media'),

    ));
};
add_action('init', 'theme_media_register_navbar');