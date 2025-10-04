<?php
function media_theme_css_js()
{
    wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css', array(), '5.3.6', 'all');
    wp_enqueue_style('bootstrap-icons-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css', array(), '1.12.1', 'all');
    wp_enqueue_style('swiper-bundle-min-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.2.10', 'all');
    wp_enqueue_style('baloo-da-font', 'https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap', array(), 'null', 'all');
    wp_enqueue_style('font-awesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css', array(), '7.0', 'all');

    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('media-theme-style-css', get_stylesheet_uri());

    wp_enqueue_script('bootstrap-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.6', true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.2.10', true);
    wp_enqueue_script('swiper-slider-js', get_template_directory_uri() . '/assets/js/swiper-slider.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'media_theme_css_js');
