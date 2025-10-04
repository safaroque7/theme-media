<?php
function theme_media_register_navbar()
{
    register_nav_menus(array(
        'primary-menu'          =>  __('Primary Menu', 'media'),
        'bottom-category-menu'  =>  __('Bottom Category Menu', 'media'),
        'legal-menu'            =>  __('Legal Menu', 'media'),
        'get-in-touch-menu'     =>  __('Get In Touch Menu', 'media'),

    ));
};
add_action('init', 'theme_media_register_navbar');
